@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Все задачи</h3>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 mb-3" style="min-width: 150px;">
                        <a href="{{ route('admin.event.create') }}" class="btn btn-block btn-primary mb 3">Добавить </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0" id="list">
                                <table class="table table-hover text-nowrap data-table">
                                    <thead class="text-center">
                                        <tr>
                                            <th>№</th>
                                            <th>Название</th>
                                            <th>Срок выполнения</th>
                                            <th>Статус</th>
                                            <th>Тип задачи</th>
                                            <th colspan="3">Действие</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($events as $event)
                                            <tr>
                                                <td>{{ $event->id }}</td>
                                                <td>{{ $event->title }}</td>
                                                <td>{{ $event->eventTime }}</td>
                                                <td>{{ $event->eventStatus }}</td>
                                                <td>{{ $event->eventType }}</td>

                                                @if ((int) auth()->user()->id == $event->creator_id)
                                                <td class="text-center" style="padding-left: 0; padding-right: 0;"><a
                                                    href="{{ route('admin.event.show', $event->id) }}"><i
                                                        class="far fa-eye"></i></a>
                                                    </td>
                                                    <td class="text-center" style="padding-left: 0; padding-right: 0;"><a
                                                            href="{{ route('admin.event.edit', $event->id) }}"
                                                            class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                                    <td class="text-center" style="padding-left: 0; padding-right: 0;">
                                                        <form action="{{ route('admin.event.delete', $event->id) }} "
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="border-0 bg-white">
                                                                <i class="fas fa-trash text-danger" role="button"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    @else
                                                    <td class="text-center" colspan="3"><a
                                                        href="{{ route('admin.event.show', $event->id) }}"><i
                                                            class="far fa-eye"></i></a>
                                                        </td>
                                                @endif
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
