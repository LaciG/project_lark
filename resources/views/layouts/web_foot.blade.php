</main>

<!-- Older IE warning message -->
<!--[if IE]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

        <div class="ie-warning__downloads">
            <a href="http://www.google.com/chrome">
                <img src="/img/browsers/chrome.png" alt="">
            </a>

            <a href="https://www.mozilla.org/en-US/firefox/new">
                <img src="/img/browsers/firefox.png" alt="">
            </a>

            <a href="http://www.opera.com">
                <img src="/img/browsers/opera.png" alt="">
            </a>

            <a href="https://support.apple.com/downloads/safari">
                <img src="/img/browsers/safari.png" alt="">
            </a>

            <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                <img src="/img/browsers/edge.png" alt="">
            </a>

            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="/img/browsers/ie.png" alt="">
            </a>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->

<!-- Javascript -->
<!-- Vendors -->
<script src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

<script src="/vendors/bower_components/Clamp.js/clamp.js"></script>
<script src="/vendors/bower_components/trumbowyg/dist/trumbowyg.min.js"></script>

<script src="vendors/bower_components/moment/min/moment.min.js"></script>
<script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
<script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>



<!-- App functions and actions -->
<script src="/js/app.min.js"></script>
<script type="text/javascript">
    'use strict';
    $(document).ready(function() {
        var date = new Date();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('.calendar').fullCalendar({
            header: {
                right: '',
                center: '',
                left: ''
            },
            buttonIcons: {
                prev: 'calendar__prev',
                next: 'calendar__next'
            },
            theme: false,
            selectable: true,
            selectHelper: true,
            editable: true,
            events: [
                {
                    id: 1,
                    title: 'Fusce dapibus tellus',
                    start: new Date(y, m, 1),
                    allDay: true,
                    description: 'Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
                },
                {
                    id: 2,
                    title: 'Fusce dapibus tellus',
                    start: new Date(y, m, 10),
                    allDay: true,
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                },
                {
                    id: 3,
                    title: 'Egestas Justo',
                    start: new Date(y, m, 18),
                    allDay: true,
                    description: ''
                },
                {
                    id: 4,
                    title: 'Bibendum Vehicula Quam',
                    start: new Date(y, m, 20),
                    allDay: true,
                    description: ''
                },
                {
                    id: 5,
                    title: 'Venenatis Dolor Porta',
                    start: new Date(y, m, 5),
                    allDay: true,
                    description: 'Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'
                },
                {
                    id: 6,
                    title: 'Sem Pharetra',
                    start: new Date(y, m, 21),
                    allDay: true,
                    description: 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
                },
                {
                    id: 7,
                    title: 'Ullamcorper Porta',
                    start: new Date(y, m, 5),
                    allDay: true,
                    description: 'Malesuada Ullamcorper Nullam'
                },
                {
                    id: 8,
                    title: 'Egestas',
                    start: new Date(y, m, 5),
                    allDay: true,
                    description: ''
                },
                {
                    id: 9,
                    title: 'Purus',
                    start: new Date(y, m, 1),
                    allDay: true,
                    description: 'Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
                },
                {
                    id: 10,
                    title: 'Risus Elit',
                    start: new Date(y, m, 15),
                    allDay: true,
                    description: 'Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'
                },
                {
                    id: 11,
                    title: 'Risus Fermentum Justo',
                    start: new Date(y, m, 25),
                    allDay: true,
                    description: 'Vehicula Cras'
                },
                {
                    id: 12,
                    title: 'Porta Ornare Euismod',
                    start: new Date(y, m, 30),
                    allDay: true,
                    description: ''
                },
                {
                    id: 13,
                    title: 'Amet Adipiscing',
                    start: new Date(y, m, 30),
                    allDay: true,
                    description: ''
                },
                @for ($i = 14; $i < 20; $i++)
                {
                    id: {{$i}},
                    title: '{{ Auth::user()->name }}',
                    start: new Date(y, m, {{$i}}),
                    allDay: true,
                    description: 'Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
                },
                @endfor
            ],

            dayClick: function(date) {
                var isoDate = moment(date).toISOString();
                $('#new-event').modal('show');
                $('.new-event__title').val('');
                $('.new-event__start').val(isoDate);
                $('.new-event__end').val(isoDate);
            },

            viewRender: function (view) {
                var calendarDate = $('.calendar').fullCalendar('getDate');
                var calendarMonth = calendarDate.month();

                //Set data attribute for header. This is used to switch header images using css
                $('.calendar .fc-toolbar').attr('data-calendar-month', calendarMonth);

                //Set title in page header
                $('.content__title--calendar > h1').html(view.title);
            },

            eventClick: function (event, element) {
                $('#edit-event').modal('show');
                $('.edit-event__id').val(event.id);
                $('.edit-event__title').val(event.title);
                $('.edit-event__description').val(event.description);
            }
        });


        //Add new Event
        $('body').on('click', '.new-event__add', function(){
            var eventTitle = $('.new-event__title').val();

            // Generate ID
            var GenRandom =  {
                Stored: [],
                Job: function(){
                    var newId = Date.now().toString().substr(6); // or use any method that you want to achieve this string

                    if( !this.Check(newId) ){
                        this.Stored.push(newId);
                        return newId;
                    }
                    return this.Job();
                },
                Check: function(id){
                    for( var i = 0; i < this.Stored.length; i++ ){
                        if( this.Stored[i] == id ) return true;
                    }
                    return false;
                }
            };

            if (eventTitle != '') {
                $('.calendar').fullCalendar('renderEvent', {
                    id: GenRandom.Job(),
                    title: eventTitle,
                    start: $('.new-event__start').val(),
                    end:  $('.new-event__end').val(),
                    allDay: true,
                    className: $('.event-tag input:checked').val()
                }, true);

                $('.new-event__form')[0].reset();
                $('.new-event__title').closest('.form-group').removeClass('has-danger');
                $('#new-event').modal('hide');
            }
            else {
                $('.new-event__title').closest('.form-group').addClass('has-danger');
                $('.new-event__title').focus();
            }
        });


        //Update/Delete an Event
        $('body').on('click', '[data-calendar]', function(){
            var calendarAction = $(this).data('calendar');
            var currentId = $('.edit-event__id').val();
            var currentTitle = $('.edit-event__title').val();
            var currentDesc = $('.edit-event__description').val();
            var currentEvent = $('.calendar').fullCalendar('clientEvents', currentId);

            //Update
            if(calendarAction === 'update') {
                if (currentTitle != '') {
                    currentEvent[0].title = currentTitle;
                    currentEvent[0].description = currentDesc;

                    $('.calendar').fullCalendar('updateEvent', currentEvent[0]);
                    $('#edit-event').modal('hide');
                }
                else {
                    $('.edit-event__title').closest('.form-group').addClass('has-error');
                    $('.edit-event__title').focus();
                }
            }

            //Delete
            if(calendarAction === 'delete') {
                $('#edit-event').modal('hide');
                setTimeout(function () {
                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonClass: 'btn btn-danger',
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonClass: 'btn btn-light',
                        background: 'rgba(0,0,0,0.096)'
                    }).then(function() {
                        $('.calendar').fullCalendar('removeEvents', currentId);
                        swal({
                            title: 'Deleted!',
                            text: 'Your list has been deleted.',
                            type: 'success',
                            buttonsStyling: false,
                            cancelButtonClass: 'btn btn-light',
                            background: 'rgba(0,0,0,0.096)'
                        });
                    })
                }, 200);
            }
        });


        //Calendar views switch
        $('body').on('click', '[data-calendar-view]', function(e){
            e.preventDefault();

            $('[data-calendar-view]').removeClass('actions__item--active');
            $(this).addClass('actions__item--active');
            var calendarView = $(this).attr('data-calendar-view');
            $('.calendar').fullCalendar('changeView', calendarView);
        });


        //Calendar Next
        $('body').on('click', '.actions__calender-next', function (e) {
            e.preventDefault();
            $('.calendar').fullCalendar('next');
        });


        //Calendar Prev
        $('body').on('click', '.actions__calender-prev', function (e) {
            e.preventDefault();
            $('.calendar').fullCalendar('prev');
        });
    });
</script>
</body>

</html>