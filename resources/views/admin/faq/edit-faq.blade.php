@extends('admin.layout.app')
@section('content')
   <!--app-content open-->
   <div class="app-content">
      <section class="section">
         <!--page-header open-->
         <div class="page-header">
            <ol class="breadcrumb">
               <!-- breadcrumb -->
               <li class="breadcrumb-item active" aria-current="page"> Information </li>
            </ol>
            <!-- End breadcrumb -->
         </div>
         <!--page-header closed-->
         <!--row open-->
         <div class="row">
            <div class="col-lg-12">
               <div class="e-panel card">
                  <div class="card-header">
                     <h4> Edit FAQ </h4>
                  </div>
                  <div class="card-body">
                     @include('admin.layout.notifications')
                     <form enctype="multipart/form-data" role="form" id="" method="post" action="{{ route('edit-faq',$data->id) }}">
                        @csrf
                        <div class="card-body">

                  <div class="form-group">
                           {{-- <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="text"> --}}

                     <label for="exampleInputEmail1">FAQ Question 1</label>
                     <input type="text" class="form-control" name="question" value="{{$data->question}}" id="exampleInputEmail1" placeholder="Enter  Name">
                  </div>

                  <div class="form-group">
                     <label for="exampleInputEmail1">Ans</label>
                     <textarea class="form-control" id="content" name="answer" value="{{$data->answer}}" rows="4" cols="50">{!! $data->answer !!}

                     </textarea>
                  </div>
                           <div class="form-group">
                                 <label for="chkYes">
                                    <input type="radio" class="status" value="Active" name="status" checked />
                                    @if ($errors->has('status'))
                                       <span class="required">
                                          <strong>{{ $errors->first('status') }}</strong>
                                       </span>
                                 @endif
                                    Active
                                 </label>
                                 <label for="chkNo">
                                    <input type="radio" class="status" value="InActive" name="status" />
                                    @if ($errors->has('status'))
                                       <span class="required">
                                          <strong>{{ $errors->first('status') }}</strong>
                                       </span>
                                 @endif
                                    Inactive
                                 </label>
                           </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!--row closed-->
      </section>
   </div>
   <!--app-content closed-->
@endsection
