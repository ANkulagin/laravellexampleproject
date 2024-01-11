<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\IndexRequest;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{

    public function index(IndexRequest $request)
    {
        // Валидация данных запроса с использованием IndexRequest
        $data = $request->validated();

        // Создание запроса к базе данных для модели Worker
        $workerQuery = Worker::query();

        // Фильтрация по имени
        if (isset($data['name'])){
            $workerQuery->where('name', 'like', "%{$data['name']}%");
        }

        // Фильтрация по фамилии
        if (isset($data['surname'])){
            $workerQuery->where('surname', 'like', "%{$data['surname']}%");
        }

        // Фильтрация по email
        if (isset($data['email'])){
            $workerQuery->where('email', 'like', "%{$data['email']}%");
        }

        // Фильтрация по возрасту (от)
        if (isset($data['from'])){
            $workerQuery->where('age', '>', $data['from']);
        }

        // Фильтрация по возрасту (до)
        if (isset($data['to'])){
            $workerQuery->where('age', '<', $data['to']);
        }

        // Фильтрация по описанию
        if (isset($data['description'])){
            $workerQuery->where('description', 'like', "%{$data['description']}%");
        }

        // Фильтрация по статусу семейного положения (если выбрано)
        if (isset($data['is_married'])){
            $workerQuery->where('is_married', true);
        }

        // Пагинация - получение результатов в формате "страниц"
        $workers = $workerQuery->paginate(4);

        // Возвращение представления с передачей данных о сотрудниках
        return view('worker.index', compact('workers'));
    }


    public function show(Worker $worker)
    {
        //$worker = Worker::find($worker); из за передачи модели не нужно прописывать проверку на отсутсиве и тд
        return view('worker.show',compact('worker'));
    }

    public function create()
    {
        return view('worker.create');
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);
        Worker::create($data);
        return redirect()->route('worker.index');
    }

    public function edit(Worker $worker)
    {
        return view('worker.edit',compact('worker'));
    }
    public function update(UpdateRequest $request,Worker $worker)
    {
        $data =$request->validated();
        $data['is_married'] = isset($data['is_married']);
        $worker->update($data);
        return redirect()->route('worker.show',$worker->id);
    }

    public function delete(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('worker.index');
    }

}

