<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index(){

        $employees = User::all()->where('role', '!=', 2);

        $panelTitle = 'Список сотрудников компании';

        return view('profile.index', compact('employees', 'panelTitle'));
    }

    public function show($id){

        $user = User::findOrFail($id);

        /* Узнаем руководителей данного сотрудника */
        $empStructure ['myBoss'] = collect();
        if ($user->role != 5){ // Если это не руководитель компании
            // Добавляем руководителя компании как прямого руководителя всем сотрудникам,
            // кроме самого руководителя
            $empStructure ['myBoss'] = User::where('role', '=', '5')->get();

            // Добавляем непосредственных руководителей указанных в таблице структуры компании
            $empStructure ['myBoss'] = $empStructure ['myBoss']->merge($user->myBoss()->get());
            $empStructure ['myBoss']->all();
        }

        /* Узнаем подчиненных данного сотрудника */
        if ($user->role != 5){ // Если это не руководитель компании
            // То выбираем подчиненных из таблицы структуры компании
            $empStructure ['mySubordinate'] = $user->mySubordinate()->get();
        }else{// Если это руководитель компании
            // То выбираем всех сотрудников как подчиненных (кроме не подтвержденных новых сотрудников
            // и соответсвенно самого руководителя)
            $empStructure ['mySubordinate'] = User::whereNotIn('role', ['5', '2'])->get();
        }

        $panelTitle = 'Профиль сотрудника';
        Carbon::setlocale(App::getLocale());  // todo перенести

        return view('profile.profile', compact('user', 'empStructure', 'panelTitle'));
    }

    public function edit($id){

        $user = User::findOrFail($id);

        $panelTitle = 'Редактирование профиля';

        return view('profile.edit', compact('user', 'panelTitle'));
    }

    public function update($id, Request $request){

        $user = User::findOrFail($id);

        if ($request->year && $request->month && $request->day){
            $user->birthday = Carbon::create($request->year, $request->month, $request->day);
        }

        $user->update($request->all());

        return redirect()->route('profile.show', ['id' => $id]);
    }

    public function newEmp(){

        $employees = User::all()->where('role', '=', 2);

        $panelTitle = 'Список новых сотрудников компании';

        return view('profile.index', compact('employees', 'panelTitle'));
    }
}
