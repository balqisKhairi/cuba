<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <e-jasd></e-jasd></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Laravel 5.8 - Custom Search in Datatables </h3>
     <br />
            <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_jobName" id="filter_jobName" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="filter_jobLocation" id="filter_jobLocation" class="form-control" required>
                            <option value="">Select Country</option>
                            @foreach( $job_Location as $jobLocation)

                            <option value="{{ $jobLocation->jobLocation }}">{{ $jobLocation->jobLocation }}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="filter_jobSkill" id="filter_jobSkill" class="form-control" required>
                            <option value="">Select Skill</option>
                            @foreach( $job_skill as $jobSkill)

                            <option value="{{ $jobSkill->jobSkill }}">{{ $jobSkill->jobSkill }}</option>

                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />
   <div class="table-responsive">
    <table id="job_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Decsription</th>
                            <th>Location</th>
                            <th>Salary</th>
                            <th>Skill Needed</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                </table>
   </div>
            <br />
            <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

    fill_datatable();

    function fill_datatable(filter_jobName = '', filter_jobLocation = '', filter_jobSkill = '')
    {
        var dataTable = $('#job_data').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('customsearch.index') }}",
                data:{filter_jobName:filter_jobName, filter_jobLocation:filter_jobLocation, filter_jobSkill:filter_jobSkill}
            },
            columns: [
                {
                    data:'jobPic',
                    name:'jobPic'
                },
                {
                    data:'jobName',
                    name:'jobName'
                },
                {
                    data:'jobDesc',
                    name:'jobDesc'
                },
                {
                    data:'jobLocation',
                    name:'jobLocation'
                },
                {
                    data:'jobPay',
                    name:'jobPay'
                },
                {
                    data:'jobSkill',
                    name:'jobSkill'
                },
                {
                    data:'jobType',
                    name:'jobType'
                }
            ]
        });
    }

    $('#filter').click(function(){
        var filter_gender = $('#filter_gender').val();
        var filter_country = $('#filter_country').val();

        if(filter_gender != '' &&  filter_gender != '')
        {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_gender, filter_country);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#filter_jobName').val('');
        $('#filter_jobLocation').val('');
        $('#filter_jobSkill').val('');
        $('#job_data').DataTable().destroy();
        fill_datatable();
    });

});
</script>