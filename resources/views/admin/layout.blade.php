<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="myCtrl">
  <head>
    <link href="img/favicon.png" rel="shortcut icon" >
    <title>ARS PMS Sys</title>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

    {!!Html::style('./vendors/bootstrap/dist/css/bootstrap.min.css')!!}
    {!!Html::style('./vendors/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('./vendors/nprogress/nprogress.css')!!}
    {!!Html::style('./vendors/iCheck/skins/flat/green.css')!!}
    {!!Html::style('./vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')!!}
    {!!Html::style('./vendors/jqvmap/dist/jqvmap.min.css')!!}
    {!!Html::style('./vendors/bootstrap-daterangepicker/daterangepicker.css')!!}
    {!!Html::style('./build/css/custom.min.css')!!}



<!-- Custom styles -->
    {!!Html::style('css/fullcalendar.css')!!}
    {!!Html::style('css/widgets.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
    {!!Html::style('css/xcharts.min.css')!!}
    {!!Html::style('css/jquery-ui-1.10.4.min.css')!!}

    <script> 
   function assign(n){
     if (n=='C'){
       document.getElementById("result").value=" ";
     }else{
         
         document.getElementById("result").value+=n;
    }
   }function info(){
     alert( "Welcome! \n This calculator is created by Shamim " );
   } 
   
   function calculate(){
      var finalResult=eval(document.getElementById("result").value);
      document.getElementById("result").value=finalResult;
   }
</script>
<style>
  .calBtn{
    font-size: 18px;
    font-weight: bold;
    color: black;
    width:50px; height:50px;
  }

</style>
  </head>
       
   <body class="nav-md">

    <div class="container body">
      <div class="main_container">

    @if (Auth::guard('admin')->check())
          @include('admin.header.header')
          @include('admin.header.topnav')

         

          @yield('content')
          @yield('a')
          
      
  <!-- Modal For Calculator-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" align="center"> <strong>Calculator</strong></h4>
      </div>
      <div class="modal-body">
      
<table  width="150" height="300" border="5" cellspacing="0" cellpadding="0" bordercolor="#9900FF" bgcolor="#666666" align="center">
 
 
  <tr>
    <td colspan="4"><input class="calBtn" id="result" style="background-color:#20FD6A; font-size:20px; color: #025CFF; padding-left: 10px; width:200px; height: 50px;" name="result" >
     <em> AR Shamim </em> </td>
  </tr>
 
  <tr align="center">
    <td><input class="calBtn" type="submit"   name="seven" value="7" onClick="assign(7)"/></td>
    <td><input class="calBtn" type="submit"   name="eight" value="8" onClick="assign(8)"/></td>
    <td><input class="calBtn" type="button"   ame="nin" value="9" onClick="assign(9)"/></td>
    <td><input class="calBtn" type="button"   style=" background-color:#CFF;" name="" value="%" onClick="()"/></td>
  </tr>
  
   <tr>
    <td><input class="calBtn" type="submit"    name="four" value="4" onClick="assign(4)"/></td>
    <td><input class="calBtn" type="submit"    name="five" value="5" onClick="assign(5)"/></td>
    <td><input class="calBtn" type="button"    name="six" value="6" onClick="assign(6)"/></td>
    <td><input class="calBtn" type="button"    style=" background-color:#CFF;"  name="mul" value="X" onClick="assign('*')"/></td>
  </tr>
  
   <tr>
    <td><input class="calBtn" type="submit"    name="one" value="1" onClick="assign(1)"/></td>
    <td><input class="calBtn" type="submit"    name="two" value="2" onClick="assign(2)"/></td>
    <td><input class="calBtn" type="button"    name="three" value="3" onClick="assign(3)"/></td>
    <td><input class="calBtn" type="button"    style=" background-color:#CFF;"   name="div" value="/" onClick="assign('/')"/></td>
    </tr>
    
   <tr>
    <td><input class="calBtn" type="button" style=" background-color:#F03; font-size: 15px;"   name="clear" value="Clear" onClick="assign('C')"/></td>
    <td><input class="calBtn" type="submit"    name="zero" value="0" onClick="assign(0)"/></td>
    <td><input class="calBtn" type="button" style=" background-color:#F03;"   name="point" value="." onClick="assign('.')"/></td>
    <td><input class="calBtn" type="button" style=" background-color:#CFF;"   name="minus" value="-" onClick="assign('-')"/></td>
    </tr>
    
    <tr align="center">
    <td colspan="2"><input class="calBtn" type="button" style="width:100px; height: 50px; background-color:#0C0;"   name="equal" value="=" onClick="calculate()"/></td>
    <td><input class="calBtn" type="button" style=" background-color:#F6F;"  name="info" value="info" onClick="info()"/></td>
   
    <td><input class="calBtn" type="button" style=" background-color:#CFF; "   name="plus" value="+" onClick="assign('+')"/></td>
  </tr>
</table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

        @include('admin.footer.footer')  
    @else
          @yield('content')
      
    @endif


    </div>
    </div>


     {!!Html::script('./js/jquery.min.js')!!}
     {!!Html::script('./vendors/bootstrap/dist/js/bootstrap.min.js')!!}
     {!!Html::script('./vendors/fastclick/lib/fastclick.js')!!}
     {!!Html::script('./vendors/nprogress/nprogress.js')!!}
     {!!Html::script('./vendors/Chart.js/dist/Chart.min.js')!!}
     {!!Html::script('./vendors/gauge.js/dist/gauge.min.js')!!}
     {!!Html::script('./vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')!!}
     {!!Html::script('./vendors/iCheck/icheck.min.js')!!}
     {!!Html::script('./vendors/skycons/skycons.js')!!}
     {!!Html::script('./vendors/Flot/jquery.flot.js')!!}
     {!!Html::script('./vendors/Flot/jquery.flot.pie.js')!!}
     {!!Html::script('./vendors/Flot/jquery.flot.time.js')!!}
     {!!Html::script('./vendors/Flot/jquery.flot.stack.js')!!}
     {!!Html::script('./vendors/Flot/jquery.flot.resize.js')!!}
    <!-- Flot plugins -->
     {!!Html::script('./vendors/flot.orderbars/js/jquery.flot.orderBars.js')!!}
     {!!Html::script('./vendors/flot-spline/js/jquery.flot.spline.min.js')!!}
     {!!Html::script('./vendors/flot.curvedlines/curvedLines.js')!!}
    <!-- DateJS -->
     {!!Html::script('./vendors/DateJS/build/date.js')!!}
    <!-- JQVMap -->
     {!!Html::script('./vendors/jqvmap/dist/jquery.vmap.js')!!}
     {!!Html::script('./vendors/jqvmap/dist/maps/jquery.vmap.world.js')!!}
     {!!Html::script('./vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')!!}
     {!!Html::script('./vendors/moment/min/moment.min.js')!!}
    <!-- bootstrap-daterangepicker -->
     {!!Html::script('./vendors/bootstrap-daterangepicker/daterangepicker.js')!!}


      <!-- Datatables -->
    {!!Html::script('./vendors/datatables.net/js/jquery.dataTables.min.js')!!}
    {!!Html::script('./vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}
    {!!Html::script('./vendors/datatables.net-buttons/js/dataTables.buttons.min.js')!!}
    {!!Html::script('./vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')!!}
    {!!Html::script('./vendors/datatables.net-buttons/js/buttons.flash.min.js')!!}
    {!!Html::script('./vendors/datatables.net-buttons/js/buttons.html5.min.js')!!}
    {!!Html::script('./vendors/datatables.net-buttons/js/buttons.print.min.js')!!}
    {!!Html::script('./vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')!!}
    {!!Html::script('./vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')!!}
    {!!Html::script('./vendors/datatables.net-responsive/js/dataTables.responsive.min.js')!!}
    {!!Html::script('./vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')!!}
    {!!Html::script('./vendors/datatables.net-scroller/js/datatables.scroller.min.js')!!}
    {!!Html::script('./vendors/jszip/dist/jszip.min.js')!!}
    {!!Html::script('./vendors/pdfmake/build/pdfmake.min.js')!!}
    {!!Html::script('./vendors/pdfmake/build/vfs_fonts.js')!!}
  

     <!-- Custom Theme Scripts -->
     {!!Html::script('./build/js/custom.min.js')!!}
     <!-- Flot -->



<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope,$interval) {
  
  $scope.theTime = new Date().toLocaleTimeString()
  
  $interval(function(){
   $scope.theTime = new Date().toLocaleTimeString() 
    
  },1000);
  
});
</script>



    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- JQVMap -->
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
      });
    </script>
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->


   
    <!-- Custom Theme Scripts -->

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
    


  </body>

  </html>