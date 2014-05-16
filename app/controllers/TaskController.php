<?php


class TaskController extends Controller
{

    public function index()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        return Task::where('status', 1)->get();
    }

    public function store($titulo)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        $task = new Task();
        $task->status = 1;
        $task->titulo = $titulo;
        $task->save();
        $value = array(
            'success' => true
        );
        return json_encode($value);
    }

    public function destroy($id)
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

        $task = Task::find($id);
        $task->status = 0;
        $task->save();
        $value = array(
            'success' => true
        );
        return json_encode($value);
    }
}