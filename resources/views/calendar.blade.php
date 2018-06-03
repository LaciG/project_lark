@include('layouts.web_head')               
@include('layouts.menu')
                    
            <section class="content">
                <div class="content__inner">
                    <header class="content__title content__title--calendar">
                        <h1>Calendar</h1>
                        <small>FullCalendar is a highly customizable open source javaScript event calendar.</small>

                        <div class="actions actions--calendar">
                            <a href="#" class="actions__item actions__calender-prev"><i class="zmdi zmdi-long-arrow-left"></i></a>
                            <a href="#" class="actions__item actions__calender-next"><i class="zmdi zmdi-long-arrow-right"></i></a>
                            <i class="actions__item actions__item--active zmdi zmdi-view-comfy" data-calendar-view="month"></i>
                            <i class="actions__item zmdi zmdi-view-week" data-calendar-view="basicWeek"></i>
                            <i class="actions__item zmdi zmdi-view-day" data-calendar-view="basicDay"></i>
                        </div>
                    </header>

                    <div class="calendar card"></div>

                    <!-- Add new event -->
                    <div class="modal fade" id="new-event" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New Event</h5>
                                </div>
                                <div class="modal-body">
                                    <form class="new-event__form">
                                        <div class="form-group">
                                            <input type="text" class="form-control new-event__title" placeholder="Event Title">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <input type="hidden" class="new-event__start" />
                                        <input type="hidden" class="new-event__end" />
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-link new-event__add">Add Event</button>
                                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit event -->
                    <div class="modal fade" id="edit-event" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form class="edit-event__form">
                                        <div class="form-group">
                                            <input type="text" class="form-control edit-event__title" placeholder="Event Title">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control edit-event__description textarea-autosize" placeholder="Event Desctiption"></textarea>
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <input type="hidden" class="edit-event__id">
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-link" data-calendar="update">Update</button>
                                    <button class="btn btn-link" data-calendar="delete">Delete</button>
                                    <button class="btn btn-link" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="footer hidden-xs-down">
                    @include('layouts.footer')
                </footer>
            </section>
        @include('layouts.web_foot')