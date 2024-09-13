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
        @if (count($study_assessments)>0)
          @foreach ($study_assessments as $study_assessment)
              <tr>                  
                  <td>{{$study_assessment->first_name}}</td>                 
                  <td>{{$study_assessment->last_name}}</td>
                  <td>{{$study_assessment->email}}</td>
                  <td>{{ date('M d, Y', strtotime($study_assessment->created_at))}}</td>                                                    
                  <td class="d-flex">                                                                  
                        <a href="{{route('admin.study_assessment.show',[$study_assessment->id])}}" class="btn btn-sm bg-red-700 text-white">
                            {{ __('Show') }}
                        </a>                                                                     
                  </td>                           
              </tr>
          @endforeach                     
        @endif                            
      </tbody>
      <div class="p-2">{{$study_assessments->links()}}</div>
    </table>
  </div>
  <!-- /.card-body -->