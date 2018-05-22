@include('layouts.web_head')               
@include('layouts.menu')

<section class="content">
        <div class="content__inner">
           {{--   <header class="content__title">
                <h1>Notes</h1>
                <small>Vestibulum id ligula porta felis euismod semperonec id elit non mi porta gravida</small>

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

            <div class="toolbar">
                <div class="toolbar__label"><span class="hidden-xs-down">Total</span> {{ $number }} Notes</div>

                {{--  <div class="actions">
                    <i class="actions__item zmdi zmdi-search" data-sa-action="toolbar-search-open"></i>
                    <a href="#" class="actions__item zmdi zmdi-time"></a>
                    <div class="dropdown actions__item">
                        <i class="zmdi zmdi-sort" data-toggle="dropdown"></i>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Last Modified</a>
                            <a href="#" class="dropdown-item">Name</a>
                            <a href="#" class="dropdown-item">Size</a>
                        </div>
                    </div>
                    <a href="#" class="actions__item zmdi zmdi-help-outline"></a>
                </div>

                <div class="toolbar__search">
                    <input type="text" placeholder="Search...">
                    <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-sa-action="toolbar-search-close"></i>
                </div>  --}}
            </div>

            <div class="row notes">
                @if(count($notes) > 0)
                    @foreach($notes->all() as $note)
                        <div class="col-sm-4 col-md-3 notes__item">
                            <a href="#edit-note{{$note->id}}" data-toggle="modal">
                                <div class="notes__title">
                                    {{ $note->title }}
                                </div>
                                <div class="notes__body">
                                    {{ str_limit($note->description, '200') }}
                                </div>
                            </a>
                            <form method="post" action=' {{ url("/notes/$note->id/destroy") }} '>
                            @csrf
                            <div class="notes__actions" data-demo-action="delete-listing">
                                <button type="submit" class="zmdi zmdi-delete" onclick="return confirm('Biztos hogy törlöd a {{ $note->title }} note-ot?')"> </button>
                            </div>
                            </form>
                        </div>
                    @endforeach 
                @else
                    <p>Nincsenek Jegyzetek</p>
                @endif
            </div>

            {{--  <div class="load-more">
                <a href="#"><i class="zmdi zmdi-refresh-alt"></i> Load more notes</a>
            </div>  --}}
            <p class="text-center">
                {{ $notes->links() }}
            </p>
        </div>

        <!-- New note modal -->
        @if(count($notes) > 0)
            @foreach($notes->all() as $note)
                <div class="modal fade note-view" id="edit-note{{$note->id}}" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <form method="post" action=' {{ url("/notes/$note->id/edit") }} '>
                                @csrf
                            <div class="note-view__field">
                                <input type="text" class="form-control" placeholder="Note Title" value=" {{ $note->title }} " name="title">
                            </div>

                            <div class="note-view__field note-view__field--color">
                                <div class="note-view__label hidden-xs-down">Color</div>

                                <div class="btn-group btn-group--colors" data-toggle="buttons">
                                    <label class="btn {{ $note->color }} active"><input type="radio" name="color" value="{{ $note->color }}" autocomplete="off" checked></label>
                                    <label class="btn bg-blue"><input type="radio" name="color" value="bg-blue" autocomplete="off"></label>
                                    <label class="btn bg-teal"><input type="radio" name="color" value="bg-teal" autocomplete="off"></label>
                                    <label class="btn bg-red"><input type="radio" name="color" value="bg-red" autocomplete="off"></label>
                                    <label class="btn bg-purple"><input type="radio" name="color" value="bg-purple" autocomplete="off"></label>
                                    <label class="btn bg-yellow"><input type="radio" name="color" value="bg-yellow" autocomplete="off"></label>
                                    <label class="btn bg-cyan"><input type="radio" name="color" value="bg-cyan" autocomplete="off"></label>
                                </div>
                            </div>

                            <div class="note-view__field">
                                <input type="text" class="form-control" placeholder="Note Title" value=" {{ $note->description }} " name="description">
                            </div>

                            <div class="modal-body pb-0">
                                <textarea class="wysiwyg-editor" name="post">
                                    {{ $note->post }}
                                </textarea>
                            </div>

                            <div class="modal-footer modal-footer--bordered">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
                                <button type="submit" class="btn btn-link">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        <!-- View note -->
        <div class="modal fade note-view" id="add-note" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <form method="post" action=" {{ url('/notes/store') }} ">
                        @csrf
                        <div class="note-view__field">
                            <input type="text" class="form-control" placeholder="Title here" name="title">
                        </div>

                        <div class="note-view__field note-view__field--color">
                            <div class="note-view__label hidden-xs-down">Color</div>

                            <div class="btn-group btn-group--colors" data-toggle="buttons">
                                <label class="btn active"><input type="radio" name="color" value="active" autocomplete="off" checked></label>
                                <label class="btn bg-blue"><input type="radio" name="color" value="bg-blue" autocomplete="off"></label>
                                <label class="btn bg-teal"><input type="radio" name="color" value="bg-teal" autocomplete="off"></label>
                                <label class="btn bg-red"><input type="radio" name="color" value="bg-red" autocomplete="off"></label>
                                <label class="btn bg-purple"><input type="radio" name="color" value="bg-purple" autocomplete="off"></label>
                                <label class="btn bg-yellow"><input type="radio" name="color" value="bg-yellow" autocomplete="off"></label>
                                <label class="btn bg-cyan"><input type="radio" name="color" value="bg-cyan" autocomplete="off"></label>
                            </div>
                        </div>

                        <div class="note-view__field">
                            <input type="text" class="form-control" placeholder="Note Title" name="description">
                        </div>

                        <div class="modal-body pb-0">
                            <textarea class="wysiwyg-editor" placeholder="Your note goes here..." name="post"></textarea>
                        </div>

                        <div class="modal-footer modal-footer--bordered">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Dismiss</button>
                            <button type="submit" class="btn btn-link">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <button class="btn btn-light btn--action btn--fixed zmdi zmdi-plus" data-toggle="modal" data-target="#add-note"></button>

        <footer class="footer hidden-xs-down">
            @include('layouts.footer')
        </footer>
    </section>

@include('layouts.web_foot')