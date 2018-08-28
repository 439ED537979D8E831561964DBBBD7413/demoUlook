@extends('admin._layout.app')

@section('title', 'Services');

@section('main')
    <section class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12">
                    <table id="example" class="display table table-striped table-bordered dataTable"
                           cellspacing="0"
                           width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc">ID</th>
                            <th class="sorting_asc">Name</th>
                            <th class="sorting_asc">Description</th>
                            <th class="sorting_asc">Price</th>
                            <th class="sorting">Capacity</th>
                            <th class="sorting">Distance</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">ID</th>
                            <th rowspan="1" colspan="1">Name</th>
                            <th rowspan="1" colspan="1">Description</th>
                            <th rowspan="1" colspan="1">Price</th>
                            <th rowspan="1" colspan="1">Capacity</th>
                            <th rowspan="1" colspan="1">Distance</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach ($services as $service)
                            <tr role="row" class="odd">
                                <td class="sorting_1">{{ $service->id }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->descrion }}</td>
                                <td>{{ $service->price }}</td>
                                <td>{{ $service->capacity }}</td>
                                <td>{{ $service->distance }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(function () {
            $('#example').DataTable();
        });
    </script>
@stop