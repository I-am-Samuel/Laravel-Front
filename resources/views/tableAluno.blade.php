@extends('pattern.mainPattern')
@section('title','Buscar Aluno')


@section('content')
    <div id="table-turma">
        <h1 class="text-center">Alunos</h1>
     <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Pesquisar Aluno" aria-label="Search" id="nav-input">
      <button class="btn btn-sm" type="submit" id="btn-nav">Buscar</button>
      </form>
      <hr class="divider" id="lateralDivider">
     <table class="table">
        <thead>
            <tr>
            <th scope="col" class="text-center">Nome</th>
            <th scope="col" class="text-center">Turma</th>
            <th scope="col" class="text-center">Matricula</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td class="text-center">Samuel Eduardo Rocha de Souza</td>
            <td class="text-center">DDS-4-11</td>
            <td class="text-center">123456</td>
            </tr>
            <tr>
            <td class="text-center">Samuel Eduardo Rocha de Souza</td>
            <td class="text-center">DDS-4-11</td>
            <td class="text-center">123456</td>
            </tr>
            <tr>
            <td class="text-center">Samuel Eduardo Rocha de Souza</td>
            <td class="text-center">DDS-4-11</td>
            <td class="text-center">123456</td>
            </tr>
        </tbody>
     </table>
    </div>
@endsection
