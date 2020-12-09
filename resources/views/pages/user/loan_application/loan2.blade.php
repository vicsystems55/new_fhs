
@extends('layouts/contentLayoutMaster')

@section('title', 'Update Documents')

@section('vendor-style')
        <!-- Page css files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('vendors/css/pickers/pickadate/pickadate.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
        

@endsection

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset('css/plugins/forms/wizard.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}">

        <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}"> -->
        


@section('content')
<!-- Basic Horizontal form layout section start -->

<!-- // Basic Floating Label Form section end -->

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h1 class="card-title text-center">Step 2</h1>
              </div>
              <div class="card-content">
                  <div class="card-body">
                 
                      
                          <div class="form-bod">
                             

                          <div class="row">
                               <div class="col-md-6">
                               @if ($certificate = Session::get('certificate'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $certificate }}</strong>
</div>
@endif  

                               @if ($introduction = Session::get('introduction'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $introduction }}</strong>
</div>
@endif
                               <h3>Letter of Introduction</h3>
                             <!--   <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadPhoto')}}"> -->
                             <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadLoanDocumentsStep1')}}">

                                @csrf
                                    
                                            <div class="p-1 d-flex justify-content-center">
                                                <img onclick="openFileOption()" width="200" height="200" class="shadow " id="image_preview_container" src="{{ route('loan.displayImage',$loanApp->letterofintroduction) }}" alt="">
                                            
                                                @error('featured_img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                    
                                            <div class="form-group custom-file">


                                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >
                                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                            </div>
<!--
                                            <div class="">
                                                <button class="btn btn-primary btn-block mt--1 shadow mx-auto">Upload Passport</button>
                                            </div>
                                            -->

                                            <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                  
                  
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">UPLOAD</button>
                </div>
            </div>  

             </form> 
         <!--   </div>        

             second part of div startts -->  

            

            <div class="col-md-6">
                             <!--   <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadPhoto')}}"> -->

                             <h3>Declaration by Applicant</h3>
                             @if ($declcaration = Session::get('declcaration'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $declcaration }}</strong>
</div>
@endif
                             <form method="post" name = "form2" enctype="multipart/form-data" id = "upload_image_form1111112" action="{{route('uploadLoanDeclration')}}">
                             declcaration
                                @csrf
                                    
                                            <div class="p-1 d-flex justify-content-center">
                                                <img  width="200" height="200" class="shadow " id="image_preview_container1" src="{{ route('loan.displayImage',$loanApp->declaration) }}" alt="">
                                                <!--     src="{{ route('appointment.displayImage',$personal_data->appointmentConfirmation) }}" alt="">     -->
                                            
                                                @error('featured_img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                    
                                            <div class="form-group custom-file">


                                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >
                                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                            </div>
<!--
                                            <div class="">
                                                <button class="btn btn-primary btn-block mt--1 shadow mx-auto">Upload Passport</button>
                                            </div>
                                            -->

                                            <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="image1" placeholder="Choose image" id="image1">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                  
                  
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">UPLOAD</button>
                </div>
            </div>  

             </form> 

      
           
            </div>
                         

       <!--  End of div  --->   

       <!-- Another row starts here -->   

                         
                         
       <div class="row">
                               <div class="col-md-6">
                              
                              

                              <h3>Certificate of Head of department</h3>

                             <!--   <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadPhoto')}}"> -->
                             <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadCertificate')}}">

                                @csrf
                                    
                                            <div class="p-1 d-flex justify-content-center">
                                                <img onclick="openFileOption()" width="200" height="200" class="shadow " id="image_preview_container3" src="{{ route('loan.displayImage',$loanApp->certificateofhead) }}" alt="">
                                            
                                                @error('featured_img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                    
                                            <div class="form-group custom-file">


                                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >
                                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                            </div>
<!--
                                            <div class="">
                                                <button class="btn btn-primary btn-block mt--1 shadow mx-auto">Upload Passport</button>
                                            </div>
                                            -->

                                            <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="image3" placeholder="Choose image" id="image3">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                  
                  
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">UPLOAD</button>
                </div>
            </div>  

             </form> 

            
         <!--   </div>        

             second part of div startts -->  

           

            <div class="col-md-6">

            <!--  check if years spent in appointment is less than or equal to 10 -->
            <?php
           /// $date = Carbon\Carbon::parse($personal_data->dateOfFirstAppointment);
           // $now = Carbon\Carbon::now();
            //$diff = $date->diffInYears($now);

            //$yearsInService = $today->diff($dateofappointmentForCalc)->y;
            ?>
             
           

                           <h3>Affidavit</h3>
                             <!--   <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadPhoto')}}"> -->
                             <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="javascript:void(0)">

                                @csrf
                                       
                                            <div class="p-1 d-flex justify-content-center">
                                                <img onclick="openFileOption()" width="200" height="200" class="shadow " id="image_preview_container" src="{{ route('image.displayImage',$personal_data->photo) }}" alt="">
                                            
                                                @error('featured_img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                    
                                            <div class="form-group custom-file">


                                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >
                                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                            </div>
<!--
                                            <div class="">
                                                <button class="btn btn-primary btn-block mt--1 shadow mx-auto">Upload Passport</button>
                                            </div>
                                            -->

                                            <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                  
                  
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">UPLOAD </button>
                </div>
            </div>  

             </form> 

      
           
            </div>              
    

    <!--- The row ends here    --->                         

                                 <script>
                                 $(document).ready(function (e) {
   
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });
  
   $('#image').change(function(){
           
    let reader = new FileReader();

    reader.onload = (e) => { 

      $('#image_preview_container').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 
  
   });

   //for upload of appointment



  
   $('#upload_image_form111').submit(function(e) {

     e.preventDefault();
  
     var formData = new FormData(this);
  
     $.ajax({
        type:'POST',
        url: "{{ url('uploadLoanDocumentsStep1')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
           this.reset();
           alert('letter of introduction has been uploaded successfully');
        },
        error: function(data){
           console.log(data);
         }
       });
   });

  // for upload of appointment

     
  $('#image1').change(function(){
           
           let reader = new FileReader();
       
           reader.onload = (e) => { 
       
             $('#image_preview_container1').attr('src', e.target.result); 
           }
       
           reader.readAsDataURL(this.files[0]); 
         
          });
       
          //for upload of appointment
       
       


       // for upload of certificate

     
  $('#image3').change(function(){
           
           let reader = new FileReader();
       
           reader.onload = (e) => { 
       
             $('#image_preview_container3').attr('src', e.target.result); 
           }
       
           reader.readAsDataURL(this.files[0]); 
         
          });
       
          //for upload of appointment
          
         
          $('#upload_image_form1111').submit(function(e) {
       
            e.preventDefault();
         
            var formData = new FormData(this);
         
            $.ajax({
               type:'POST',
               url: "{{ url('uploadLoanDocumentsStep1')}}",
               data: formData,
               cache:false,
               contentType: false,
               processData: false,
               success: (data) => {
                  this.reset();
                  alert('declaration has been uploaded successfully');
               },
               error: function(data){
                  console.log(data);
                }
              });
          });

  // upload of appointment ends

});
                                 </script>
                                

                                 
                                

                                
                                   


                                    </div>
                                    

                                    <!--
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                <a href="{{route('user.profile2')}}" class="btn btn-outline-primary shadow mr-1 mb-1">Previous</a> 
                                     
                                  </div>
                                  -->
                              
                                  <div class="col-12 d-flex justify-content-between">
                                <a href="{{route('loan.step1')}}" class="btn btn-primary shadow mr-1 mb-1">Previous</a> 
                                      <button type="submit" class="btn btn-primary shadow mr-1 mb-1">Next</button>
                                  </div>


                              </div>
                          </div>
                     
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset('vendors/js/extensions/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
        <!-- <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
        <script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script> -->
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/legacy.js') }}"></script>
        <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/scripts/forms/wizard-steps.js') }}"></script>
        <!-- <script src="{{ asset('js/scripts/extensions/dropzone.js') }}"></script> -->
        <script src="{{ asset('js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>
        <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>

        <script src="{{ asset('lga/js/lga.min.js') }}"></script>
@endsection

