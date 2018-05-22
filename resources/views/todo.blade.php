@include('layouts.web_head')               
@include('layouts.menu')

<section class="content">
        <div class="content__inner">
                @if (session('status'))
                            
                <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
    
                                {{ session('status') }}
                            </div>
                @endif

                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                {{ $error }}
                            </div>
                    @endforeach
                @endif

                @if(session('response'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        {{ session('response') }}
                    </div>
                @endif
            {{--  <header class="content__title">
                <h1>Todo Lists</h1>
                <small>Donec idelit nonmi porta gravida at eget metus</small>

                <div class="actions">
                    <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                    <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                    <div class="dropdown actions__item">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Refresh</a>
                            <a href="#" class="dropdown-item">Manage Widgets</a>
                            <a href="#" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>
            </header>  --}}

            <div class="row todo">
                <div class="col-md-8">
                    <div class="card">
                        <div class="toolbar toolbar--inner">
                            <div class="toolbar__label">{{ $todoNumber }} Total todo lists</div>

                            {{--  <div class="actions">
                                <i class="actions__item zmdi zmdi-search" data-sa-action="toolbar-search-open"></i>
                                <div class="dropdown actions__item">
                                    <i class="zmdi zmdi-sort" data-toggle="dropdown"></i>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Newest to Oldest</a>
                                        <a href="#" class="dropdown-item">Oldest to Newest</a>
                                        <a href="#" class="dropdown-item">Completed first</a>
                                    </div>
                                </div>
                                <a href="#" class="actions__item zmdi zmdi-help-outline"></a>
                                <a href="#" class="actions__item zmdi zmdi-settings"></a>
                            </div>

                            <div class="toolbar__search">
                                <input type="text" placeholder="Search...">

                                <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-sa-action="toolbar-search-close"></i>
                            </div>  --}}
                        </div>

                        <div class="listview listview--bordered">
                            @if(count($todos) > 0)
                                @foreach($todos->all() as $todo)
                                    <div class="listview__item">
                                        <label class="custom-control custom-control--char todo__item">
                                            <input class="custom-control-input" type="checkbox">
                                            <span class="custom-control--char__helper"><i>F</i></span>
                                            <div class="todo__info">
                                                <span>{{ $todo->name }}</span>
                                                <small>{{ $todo->created_at }}</small>
                                            </div>

                                            <div class="listview__attrs">
                                                <span>{{ $todo->label }}</span>
                                                <span>{{ $todo->priority }}
                                                </span>
                                            </div>
                                        </label>

                                        <div class="actions listview__actions">
                                            <div class="dropdown actions__item">
                                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Mark as completed</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            @endif
                            {{ $todos->links() }}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Labels</h4>
                            <h6 class="card-subtitle">Etiam porta malesuada magna mollis</h6>

                            <div class="todo__labels">
                                @if(count($labels) > 0)
                                    @foreach($labels as $label)
                                        <a href="#"> {{ $label->name }} </a>
                                    @endforeach
                                @else
                                    <p>Nincsenek címkék</p>
                                @endif
                            </div>
                        </div>

                        <div class="card-footer card-footer--highlight">
                            <form method="post" action=' {{ url("/todo/storeLabel") }} '>
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="New Label" name="name">
                                </div>

                                <button type="submit" class="btn btn-light">Create Label</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New label modal -->
            <div class="modal fade" id="modal-new-todo" tabindex="-1">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <form method="post" action=' {{ url("/todo/store") }} '>
                            @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">New Todo List</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="What do you want to do?" name="name">
                            </div>

                            <div class="form-group select2-parent">
                                <select class="select2" name="label">
                                    <option>Select a Label</option>
                                    @if(count($labels) > 0)
                                        @foreach($labels as $label)
                                            <option value="{{ $label->name }}"> {{ $label->name }} </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group mb-0">
                                <label>Set Priority</label>
                                
                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                    <label class="btn btn-light active">
                                        <input type="radio" name="priority" id="option1" value="!" autocomplete="off" checked> !
                                    </label>
                                    <label class="btn btn-light">
                                        <input type="radio" name="priority" id="option2" value="!!" autocomplete="off"> !!
                                    </label>
                                    <label class="btn btn-light">
                                        <input type="radio" name="priority" id="option3" value="!!!" autocomplete="off"> !!!
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-link">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <button class="btn btn-light btn--action btn--fixed zmdi zmdi-plus" data-toggle="modal" data-target="#modal-new-todo"></button>
        </div>

        <footer class="footer hidden-xs-down">
            @include('layouts.footer')
        </footer>
    </section>

@include('layouts.web_foot')