<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\IndexRequest;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Illuminate\Http\Request;



class WorkerController extends Controller
{
    /**
     * Отображает список работников с возможностью фильтрации и пагинацией.
     *
     * @param IndexRequest $request Запрос с параметрами для фильтрации.
     * @return \Illuminate\View\View
     */
    public function index(IndexRequest $request)
    {
        // Валидация данных запроса с использованием IndexRequest
        $data = $request->validated();

        // Создание запроса к базе данных для модели Worker
        $workerQuery = Worker::query();

        // Фильтрация по имени
        if (isset($data['name'])) {
            $workerQuery->where('name', 'like', "%{$data['name']}%");
        }

        // Фильтрация по фамилии
        if (isset($data['surname'])) {
            $workerQuery->where('surname', 'like', "%{$data['surname']}%");
        }

        // Фильтрация по email
        if (isset($data['email'])) {
            $workerQuery->where('email', 'like', "%{$data['email']}%");
        }

        // Фильтрация по возрасту (от)
        if (isset($data['from'])) {
            $workerQuery->where('age', '>', $data['from']);
        }

        // Фильтрация по возрасту (до)
        if (isset($data['to'])) {
            $workerQuery->where('age', '<', $data['to']);
        }

        // Фильтрация по описанию
        if (isset($data['description'])) {
            $workerQuery->where('description', 'like', "%{$data['description']}%");
        }

        // Фильтрация по статусу семейного положения (если выбрано)
        if (isset($data['is_married'])) {
            $workerQuery->where('is_married', true);
        }

        // Пагинация - получение результатов в формате "страниц"
        $workers = $workerQuery->paginate(4);

        // Возвращение представления с передачей данных о сотрудниках
        return view('worker.index', compact('workers'));
    }

    /**
     * Отображает страницу с информацией о работнике.
     *
     * @param Worker $worker Работник для отображения.
     * @return \Illuminate\View\View
     */
    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
    }

    /**
     * Отображает форму создания нового работника.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('worker.create');
    }

    /**
     * Сохраняет нового работника в базе данных.
     *
     * @param StoreRequest $request Запрос с данными для создания работника.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);

        // Создание нового работника в базе данных
        Worker::create($data);

        // Перенаправление на страницу списка работников
        return redirect()->route('worker.index');
    }

    /**
     * Отображает форму редактирования информации о работнике.
     *
     * @param Worker $worker Работник для редактирования.
     * @return \Illuminate\View\View
     */
    public function edit(Worker $worker)
    {
        return view('worker.edit', compact('worker'));
    }

    /**
     * Обновляет информацию о работнике в базе данных.
     *
     * @param UpdateRequest $request Запрос с данными для обновления работника.
     * @param Worker $worker Работник для обновления.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request, Worker $worker)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);

        // Обновление информации о работнике в базе данных
        $worker->update($data);

        // Перенаправление на страницу с информацией о работнике
        return redirect()->route('worker.show', $worker->id);
    }

    /**
     * Удаляет работника из базы данных.
     *
     * @param Worker $worker Работник для удаления.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Worker $worker)
    {
        // Удаление работника из базы данных
        $worker->delete();

        // Перенаправление на страницу списка работников
        return redirect()->route('worker.index');
    }
}

