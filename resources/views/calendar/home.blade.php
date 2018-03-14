@extends('layout2')

@section('content')

<div class="content-wrapper">

	<section class="content"  id="dashboard">
      <!-- Small boxes (Stat box) -->   
      <div class="container">  

<div class="panel panel-default">
    <!-- Content Header (Page header) -->
    <div class="panel-heading"><h2> Hoja de Tiempos   </h2>  </div>
    <div class="panel-body">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">CLIENTES</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
                             
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Cliente</h3>
            </div>
            <div class="box-body">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                <ul class="fc-color-picker" id="color-chooser">
                  <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <div class="input-group">
                <input id="new-event" type="text" class="form-control" placeholder="Título de evento">

                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Agregar</button>
                </div>
                <!-- /btn-group -->
              </div><br/><br/>
              <!-- /input-group -->
              {!! Form::open(['route' => ['guardaEventossinajax'], 'method' => 'POST', 'id' =>'form-calendario']) !!}
              <div id="responsive-modal" class="modal fade" tabindex="-1" data-backdrop="static" >
                <div class="modal-dialog">
                  <div class="modal-content">
                       <div class="modal-header">
                          <h4>Registro de Actividad</h4>
                       </div>
                       <div class="modal-body">

                           
                            <div class="form-group">
                               <label>Cliente: </label>
                               <select class="form-control" placeholder="Selecciona" id="cliente" name="cliente">
                                 @foreach($states as $category)
                                  <option value="{{$category->id }}">{{$category->name}}</option>
                                  @endforeach
                              </select>
                            </div>

                             <div class="form-group">
                               <label>Centro de costos: </label>
                               <select class="form-control" placeholder="Selecciona" id="centrodecostos" name="centrodecostos">
                                 <option value=""></option>
                               </select>
                            </div>


                            <div class="form-group">
                               <label>Hora Inicio: </label>
                                
                                <select name="horainicio" id="horainicio" class="form-control">
                                  <option value="04:00:00">04:00 am</option>
                                  <option value="04:30:00">04:30 am</option>
                                  <option value="05:00:00">05:00 am</option>
                                  <option value="05:30:00">05:30 am</option>
                                  <option value="06:00:00">06:00 am</option>
                                  <option value="06:30:00">06:30 am</option>
                                  <option value="07:00:00">07:00 am</option>
                                  <option value="07:30:00">07:30 am</option>
                                  <option value="08:00:00">08:00 am</option>
                                  <option value="08:30:00">08:30 am</option>
                                  <option value="09:00:00">09:00 am</option>
                                  <option value="09:30:00">09:30 am</option>
                                  <option value="10:00:00">10:00 am</option>
                                  <option value="10:30:00">10:30 am</option>
                                  <option value="11:00:00">11:00 am</option>
                                  <option value="11:30:00">11:30 am</option>
                                  <option value="12:00:00">12:00 am</option>
                                  <option value="12:30:00">12:30 am</option>
                                  <option value="13:00:00">01:00 pm</option>
                                  <option value="13:30:00">01:30 pm</option>
                                  <option value="14:00:00">02:00 pm</option>
                                  <option value="14:30:00">02:30 pm</option>
                                  <option value="15:00:00">03:00 pm</option>
                                  <option value="15:30:00">03:30 pm</option>
                                  <option value="16:00:00">04:00 pm</option>
                                  <option value="16:30:00">04:30 pm</option>
                                  <option value="17:00:00">05:00 pm</option>
                                  <option value="17:30:00">05:30 pm</option>
                                  <option value="18:00:00">06:00 pm</option>
                                  <option value="18:30:00">06:30 pm</option>
                                  <option value="19:00:00">07:00 pm</option>
                                  <option value="19:30:00">07:30 pm</option>
                                  <option value="20:00:00">08:00 pm</option>
                                  <option value="20:30:00">08:30 pm</option>
                                  <option value="21:00:00">09:00 pm</option>
                                  <option value="21:30:00">09:30 pm</option>
                                  <option value="22:00:00">10:00 pm</option>
                                  <option value="22:30:00">10:30 pm</option>
                                </select>
                            </div>

                            <div class="form-group">
                               <label>Hora Fin: </label>
                                <select name="horafin" id="horafin" class="form-control">
                                  <option value="04:00:00">04:00 am</option>
                                  <option value="04:30:00">04:30 am</option>
                                  <option value="05:00:00">05:00 am</option>
                                  <option value="05:30:00">05:30 am</option>
                                  <option value="06:00:00">06:00 am</option>
                                  <option value="06:30:00">06:30 am</option>
                                  <option value="07:00:00">07:00 am</option>
                                  <option value="07:30:00">07:30 am</option>
                                  <option value="08:00:00">08:00 am</option>
                                  <option value="08:30:00">08:30 am</option>
                                  <option value="09:00:00">09:00 am</option>
                                  <option value="09:30:00">09:30 am</option>
                                  <option value="10:00:00">10:00 am</option>
                                  <option value="10:30:00">10:30 am</option>
                                  <option value="11:00:00">11:00 am</option>
                                  <option value="11:30:00">11:30 am</option>
                                  <option value="12:00:00">12:00 am</option>
                                  <option value="12:30:00">12:30 am</option>
                                  <option value="13:00:00">01:00 pm</option>
                                  <option value="13:30:00">01:30 pm</option>
                                  <option value="14:00:00">02:00 pm</option>
                                  <option value="14:30:00">02:30 pm</option>
                                  <option value="15:00:00">03:00 pm</option>
                                  <option value="15:30:00">03:30 pm</option>
                                  <option value="16:00:00">04:00 pm</option>
                                  <option value="16:30:00">04:30 pm</option>
                                  <option value="17:00:00">05:00 pm</option>
                                  <option value="17:30:00">05:30 pm</option>
                                  <option value="18:00:00">06:00 pm</option>
                                  <option value="18:30:00">06:30 pm</option>
                                  <option value="19:00:00">07:00 pm</option>
                                  <option value="19:30:00">07:30 pm</option>
                                  <option value="20:00:00">08:00 pm</option>
                                  <option value="20:30:00">08:30 pm</option>
                                  <option value="21:00:00">09:00 pm</option>
                                  <option value="21:30:00">09:30 pm</option>
                                  <option value="22:00:00">10:00 pm</option>
                                  <option value="22:30:00">10:30 pm</option>
                                </select>
                            </div>
                            <input type="hidden" name="start2" id="start2">

                            <div class="form-group">
                               <label>Actividad: </label>
                                <input type="text" required="" name="actividad" class="form-control" />
                            </div>
                         <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                       </div>
                       <div class="modal-footer">
                        <button type="button" class="btn.btn-default" data-dismiss="modal">Cancelar</button>
                        {!!Form::submit('Guardar',array('onclick'=>'enviardia'),['class' => 'btn-btn-success'])!!}
                      

                       </div>
                 </div>
                </div>
             </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   </div><!-- /.panel-body -->
  </div><!-- /.panel -->
</div>
</div>
</section>
</div>


@endsection()

@section('scripts')

<script>

      
       // $('#cliente').change(function(event){
       //       $.get("ajax-centrodecostos/"+event.target.value+"",function(response,cliente){
       //        // $('#centrodecostos').empty();
       //        for(i=0; i<response.length;i++){
       //            $('#centrodecostos').append('<option value="'+response[i].codigo+"''>"+response[i].name+"</option>");
       //          }
       //        });

       //      });

       $("#cliente").change(event => {
        $.get(`ajax-centrodecostos/${event.target.value}`, function(res, cliente){
          $("#centrodecostos").empty();
          res.forEach(element => {
            $("#centrodecostos").append(`<option value=${element.id}> ${element.name} </option>`);
          });
        });
      });

       (function($){
        $(function(){
          $('input.timepicker').timepicker();
        });
      })(jQuery);

    
  $(function () {
    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {
        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex: 1070,
          revert: true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        });

      });
    }

    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
  //while(reload==false){
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'hoy',
        month: 'mes',
        week: 'semana',
        day: 'día'
      },

      events: { url:"cargaEventos"},

      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!

      drop: function (date, allDay) { // this function is called when something is dropped

         

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject');
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);
        allDay=true;
        // assign it the date that was reported
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
       
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");

       
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove();
        }
        //Guardamos el evento creado en base de datos
        var title=copiedEventObject.title;
        var start=copiedEventObject.start.format("YYYY-MM-DD HH:mm");
        var back=copiedEventObject.backgroundColor;
       
        crsfToken = document.getElementsByName("_token")[0].value;
        $.ajax({
             url: 'guardaEventos',
             data: 'title='+ title+'&start='+ start+'&allday='+allDay+'&background='+back,
             type: "POST",
             headers: {
                    "X-CSRF-TOKEN": crsfToken
                },
              success: function(events) {
                console.log('Evento creado');      
                $('#calendar').fullCalendar('refetchEvents' );
              },
              error: function(json){
                console.log("Error al crear evento");
              }        
        });        
      },

      eventResize: function(event) {
          var start = event.start.format("YYYY-MM-DD HH:mm");
          var back=event.backgroundColor;
          var allDay=event.allDay;
          if(event.end){
            var end = event.end.format("YYYY-MM-DD HH:mm");
          }else{var end="NULL";
          }
          crsfToken = document.getElementsByName("_token")[0].value;
            $.ajax({
              url: 'actualizaEventos',
              data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id+'&background='+back+'&allday='+allDay,
              type: "POST",
              headers: {
                    "X-CSRF-TOKEN": crsfToken
                },
                success: function(json) {
                  console.log("Updated Successfully");
                },
                error: function(json){
                  console.log("Error al actualizar evento");
                }
            });
      }, 

        eventMouseover: function( event, jsEvent, view ) { 
        var start = (event.start.format("HH:mm"));
        var back=event.backgroundColor;
        if(event.end){
            var end = event.end.format("HH:mm");
        }else{var end="No definido";
        }
        if(event.allDay){
            var allDay = "Si";
        }else{var allDay="No";
        }
        var tooltip = '<div class="tooltipevent" style="width:200px;height:100px;color:white;background:'+back+';position:absolute;z-index:10001;">'+'<center>'+ event.title +'</center>'+'Todo el dia: '+allDay+'<br>'+ 'Inicio: '+start+'<br>'+ 'Fin: '+ end +'</div>';
        $("body").append(tooltip);
        $(this).mouseover(function(e) {
          $(this).css('z-index', 10000);
          $('.tooltipevent').fadeIn('500');
          $('.tooltipevent').fadeTo('10', 1.9);
        }).mousemove(function(e) {
          $('.tooltipevent').css('top', e.pageY + 10);
          $('.tooltipevent').css('left', e.pageX + 20);
        });            
      } ,
      eventMouseout: function(calEvent, jsEvent) {
        $(this).css('z-index', 8);
        $('.tooltipevent').remove();
      },

      /* dayClick: function(date, jsEvent, view) {
            if (view.name === "month") {
                $('#calendar').fullCalendar('gotoDate', date);
                $('#calendar').fullCalendar('changeView', 'agendaDay');
            }
      },*/

      dayClick: function(date){
         $('#responsive-modal').modal('show');
       
         var originalEventObject = $(this).data('eventObject');
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);

         copiedEventObject.start = date;

        var start=copiedEventObject.start.format("YYYY-MM-DD");
  
        $("#start2").val(start);

        //document.form-calendario.start2.value="start"; 

        crsfToken = document.getElementsByName("_token")[0].value;
        // $.ajax({
        //      url: 'guardaEventossinajax',
        //      data: 'start='+ start,
        //      type: "POST",
        //      headers: {
        //             "X-CSRF-TOKEN": crsfToken
        //         },
        //       success: function(events) {
        //         console.log('Fecha enviada');      
        //         $('#calendar').fullCalendar('refetchEvents' );
        //       },
        //       error: function(json){
        //         console.log("Error al enviar fecha evento");
        //       }        
        // });


        //alert(start);

      },

    


      
       eventClick: function (event, jsEvent, view) {
        crsfToken = document.getElementsByName("_token")[0].value;
        var con=confirm("Esta seguro que desea eliminar el evento");
        if(con){
            $.ajax({
               url: 'eliminaEvento',
               data: 'id=' + event.id,
               headers: {
                  "X-CSRF-TOKEN": crsfToken
                },
               type: "POST",
               success: function () {
                    $('#calendar').fullCalendar('removeEvents', event._id);
                    console.log("Evento eliminado");
                }
            });
        }else{
           console.log("Cancelado");
        }
      }

    }  );

    /* AGREGANDO EVENTOS AL PANEL */
    var currColor = "#3c8dbc"; //Red by default
    //Color chooser button
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      //Save color
      currColor = $(this).css("color");
      //Add color effect to button
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      //Get value and make sure it is not null
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }

      //Create events
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);

      //Add draggable funtionality
      ini_events(event);

      //Remove event from text input
      $("#new-event").val("");
    });
  });

  function enviardia(date){
        
      }


    

   

</script>


@endsection()