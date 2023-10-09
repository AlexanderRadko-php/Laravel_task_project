@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3>Редактировать задачу</h3>
                        <form action="{{ route('admin.event.update', $event->id) }}" method="POST" class="w-50"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
{{--                            <div class="form-group w-50">--}}
{{--                                <label>Название события</label>--}}
{{--                                <input type="text" class="form-control" name="title" placeholder="Название события"--}}
{{--                                    value="{{ $event->title }}">--}}
{{--                                @error('title')--}}
{{--                                    <div class="text-danger">{{ $message }}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
                            <div class="form-group w-50">
                                <label>Описание задачи</label>
                                <input type="text" class="form-control" name="content" placeholder="Название события"
                                    value="{{ $event->content }}">
                                @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Статус задачи</label>
                                <br>
                                <select name="eventStatus" class="form-control">
                                    <option name="eventStatus" value="{{ ('Новая') }}">Новая</option>
                                    <option name="eventStatus" value="{{ ('В работе') }}">В работе</option>
                                    <option name="eventStatus" value="{{ ('На тестировании') }}">На тестировании</option>
                                    <option name="eventStatus" value="{{ ('Завершена') }}">Завершена</option>
                                </select>
                            </div>
{{--                            <div class="form-group w-50">--}}
{{--                                <label>Дата события</label>--}}
{{--                                <input type="date" class="form-control" name="eventDate" placeholder="Название события"--}}
{{--                                    value="{{ $event->eventDate }}">--}}
{{--                                @error('eventDate')--}}
{{--                                    <div class="text-danger">{{ $message }}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
                            <input type="hidden" name="creator_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Сохранить">
                            </div>
                    </form>
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
