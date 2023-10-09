@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <h3>Создать задачу</h3>
                        <form action="{{ route('admin.event.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-50">
                                <label>Название</label>
                                <input type="text" class="form-control" name="title" placeholder="Название события"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Описание</label>
                                <input type="text" class="form-control" name="content" placeholder="Название события"
                                    value="{{ old('content') }}">
                                @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Время выполнения</label>
                                <input type="text" pattern="[0-9]+([\.,][0-9]+)?" class="form-control" name="eventTime" placeholder="Укажите время в часах"
                                       value="{{ old('eventTime') }}">
                                @error('eventTime')
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
                            <div class="form-group w-50">
                                <label>Тип задачи</label>
                                <br>
                                <select name="eventType" class="form-control">
                                    <option name="eventType" value="{{ ('Новый функционал') }}">Новая задача</option>
                                    <option name="eventType" value="{{ ('Баг') }}">Баг</option>
                                </select>
                            </div>
                            <input type="hidden" name="creator_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Создать">
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
