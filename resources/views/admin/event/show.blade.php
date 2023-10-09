@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h3 class="m-0 mr-2"><span>Задача №</span> {{ $event->id }} </h3>
                    @if ((int) auth()->user()->id == $event->creator_id)
                    <a href="{{ route('admin.event.edit', $event->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                    <td>
                        <form action="{{ route('admin.event.delete', $event->id) }} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-white">
                                <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </td>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $event->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Описание</td>
                                        <td>{{ $event->content }}</td>
                                    </tr>
                                    <tr>
                                        <td>Срок выполнения</td>
                                        <td>{{ $event->eventTime }} <span> ч</span></td>
                                    </tr>
                                    <tr>
                                        <td>Статус</td>
                                        <td>{{ $event->eventStatus }}</td>
                                    </tr>
                                    <tr>
                                        <td>Тип задачи</td>
                                        <td>{{ $event->eventType }}</td>
                                    </tr>
                                    <tr>
                                        <td>Действие</td>
                                        <td>
                                            @if ($myEvents->find($event->id))
                                            <form action="{{route('unfollow', $event->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" id="delete-follow-{{ $event->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i> Отказаться от задачи
                                                </button>
                                            </form>
                                            @else
                                            <form action="{{route('follow', $event->id)}}" method="POST">
                                                @csrf
                                                <button type="submit" id="follow-user-{{ $event->id }}" class="btn btn-success">
                                                    <i class="fa fa-btn fa-user" ></i> Взять себе
                                                </button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3>Участники</h3>
                        </div>
                    </div>
                    <div class="card align-items-center">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    @foreach ($members as $member)
                                    <tr>
                                        <td><a href="{{ route('admin.user.show', $member->id)}}">{{$member->name}} {{$member->secondName}}</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>
</div>
</div>
</section>

</div>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>
@endsection
