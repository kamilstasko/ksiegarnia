@extends('admin.layouts.app')

@section('contentView')
    <div id="content">
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ ucfirst(str_replace('_', ' ', $table_name)) }}</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('admin.add') }}" method="post">
                            @csrf
                            <input type="hidden" name="table" value="{{ $table_name }}">
                            <input type="hidden" name="column" value="{{ $table_column }}">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <tbody>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @foreach ($table_column as $key => $column)
                                    <tr>
                                        <th>{{ $column->COLUMN_NAME }}</th>
                                        @php($name = $column->COLUMN_NAME)
                                        @if ($name == 'date')
                                            <td>
                                                {{ now() }}
                                                <input type="hidden" name="id" value="{{ now() }}">
                                            </td>
                                        @elseif ($name == 'id_cat')
                                            <td>
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonCat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    @if (old($name))
                                                        @foreach ($column_id_cat as $cat)
                                                            @if(($selected_cat = old($name)) == $cat->id)
                                                                {{ $cat->slug }}
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        @php($selected_cat = $column_id_cat[0]->id)
                                                        {{ $column_id_cat[0]->slug }}
                                                    @endif
                                                </button>
                                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                    @foreach ($column_id_cat as $cat)
                                                        <button class="dropdown-item dropdown-item-cat" onclick="return false;" value="{{ $cat->id }}">{{ $cat->slug }}</button>
                                                    @endforeach
                                                </div>
                                                <input type="hidden" name="id_cat" id="id_cat" value="{{ $selected_cat }}">
                                            </td>
                                        @elseif ($name == 'id_author')
                                            <td>
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonAuthor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    @if (old($name))
                                                        @foreach ($column_id_author as $author)
                                                            @if(($selected_author = old($name)) == $author->id)
                                                                {{ $author->name }}
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        @php($selected_author = $column_id_author[0]->id)
                                                        {{ $column_id_author[0]->name }}
                                                    @endif
                                                </button>
                                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                    @foreach ($column_id_author as $author)
                                                        <button class="dropdown-item dropdown-item-author" onclick="return false;" value="{{ $author->id }}">{{ $author->name }}</button>
                                                    @endforeach
                                                </div>
                                                <input type="hidden" name="id_author" id="id_author" value="{{ $selected_author }}">
                                            </td>
                                        @elseif ($name == 'id_publishing')
                                            <td>
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonPublishing" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    @if (old($name))
                                                        @foreach ($column_id_publishing as $publishing)
                                                            @if(($selected_publishing = old($name)) == $publishing->id)
                                                                {{ $publishing->name }}
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        @php($selected_publishing = $column_id_publishing[0]->id)
                                                        {{ $column_id_publishing[0]->name }}
                                                    @endif
                                                </button>
                                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                    @foreach ($column_id_publishing as $publishing)
                                                        <button class="dropdown-item dropdown-item-publishing" onclick="return false;" value="{{ $publishing->id }}">{{ $publishing->name }}</button>
                                                    @endforeach
                                                </div>
                                                <input type="hidden" name="id_publishing" id="id_publishing" value="{{ $selected_publishing }}">
                                            </td>
                                        @elseif ($name == 'id_products')
                                            <td>
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButtonProducts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    @if (old($name))
                                                        @foreach ($column_id_products as $products)
                                                            @if(($selected_products = old($name)) == $products->id)
                                                                {{ $products->name }}
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        @php($selected_products = $column_id_products[0]->id)
                                                        {{ $column_id_products[0]->name }}
                                                    @endif
                                                </button>
                                                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                    @foreach ($column_id_products as $products)
                                                        <button class="dropdown-item dropdown-item-products" onclick="return false;" value="{{ $products->id }}">{{ $products->name }}</button>
                                                    @endforeach
                                                </div>
                                                <input type="hidden" name="id_products" id="id_products" value="{{ $selected_products }}">
                                            </td>
                                        @else
                                            <td><textarea name="{{ $name }}">@if (old($name)){{ old($name) }}@endif</textarea></td>
                                        @endif
                                    </tr>
                                @endforeach
                                    <tr class="save-edit">
                                        <td colspan="2">
                                            <button class="btn btn-success btn-circle btn-lg">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection