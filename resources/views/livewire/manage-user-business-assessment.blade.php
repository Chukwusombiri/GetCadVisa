<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>          
          <th>First Name</th>         
          <th>Last Name</th> 
          <th>Email</th>                      
          <th>created</th>                      
          <th>Action</th>                       
        </tr>
      </thead>
      <tbody>
        @if (count($business_assessments)>0)
          @foreach ($business_assessments as $business_assessment)
              <tr>                  
                  <td>{{$business_assessment->first_name}}</td>                 
                  <td>{{$business_assessment->last_name}}</td>
                  <td>{{$business_assessment->email}}</td>
                  <td>{{ date('M d, Y', strtotime($business_assessment->created_at))}}</td>                                                    
                  <td class="d-flex">                                                                  
                        <a href="{{route('admin.business_assessment.show',[$business_assessment->id])}}" class="btn btn-sm bg-red-700 text-white">
                            {{ __('Show') }}
                        </a>                                                                     
                  </td>                           
              </tr>
          @endforeach                     
        @endif                            
      </tbody>
      <div class="p-2">{{$business_assessments->links()}}</div>
    </table>
  </div>
  <!-- /.card-body -->