<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    private $count=1;
    public function index()
    {
        $workers = Worker::all();
        return view('worker.index',compact('workers'));
    }

    public function show(Worker $worker)
    {
        //$worker = Worker::find($worker); из за передачи модели не нужно прописывать проверку на отсутсиве и тд
        return view('worker.show',compact('worker'));
    }

    public function create()
    {
        $worker = [
            'name'=>'Ivan',
            'surname'=>'Ivanov',
            'email'=>'Ivan@mail.ru',
            'age'=>'20',
            'description'=>'I Ivan',
            'is_married'=>false,
        ];
        Worker::create($worker);
        return 'Ivan create';
    }

    public function update()
    {
            $worker= Worker::find(1);
            $worker->update([
                'name'=>'andrey',
            ]);
        return "name is andrey not ivan";
    }

    public function delete()
    {

        $worker =Worker::find($this->count);
        if ($worker) {
            $worker->delete();
            $this->count++;
            return "Worker deleted successfully.";
        } else {
            return "Worker not found.";
        }
    }

}

