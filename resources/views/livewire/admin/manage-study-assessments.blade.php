<div class="card">
  <div class="card-header">      
    <div class="flex justify-between items-center">  
      <h3 class="text-3xl text-rose-700 futura-medium tracking-wide mb-4 md:mb-0">Study Visa Assessments</h3>      
      <select wire:model="sorter" class="focus:border-neutral-900 focus:ring-neutral-900 border border-gray-900 rounded-xl">
          <option value="asc" class="p-2">Sort by: Oldest</option>
          <option value="desc" class="p-2">Sort by: Newest</option>
      </select>            
    </div>        
  </div>
  <!-- search -->
  <div class="my-6 w-full px-4 flex items-center">
    <div class="w-full relative border h-12 shadow p-4 rounded-full flex items-center">
        <input type="text" wire:model="search"
            class="w-full appearance-none border-none outline-none focus:outline-none focus:border-none focus:ring-transparent"
            placeholder="Filter by name or email">
        <button wire:click="clear" type="button">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-square-rounded-x-filled text-gray-500 hover:text-gray-600 h-7 w-7 fill-current"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm-1.489 7.14a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z"
                    fill="currentColor" stroke-width="0" />
            </svg>
        </button>
    </div>
  </div>
  {{-- table --}}
  <div class="card-body table-responsive">      
    <table class="table table-hover table-head-fixed text-nowrap">
      <thead>
        <tr>
          <th></th>
          <th>User</th>         
          <th>Email</th> 
          <th>Phone</th> 
          <th>Created</th>                                    
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($assessments as $u => $assessment)
          <tr>
            <td
              class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
              <img src="{{ asset('storage/' . $assessment->passport) }}"
                  alt="{{ $assessment->first_name . ' ' . $assessment->last_name . ' photo' }}"
                  class="w-20 h-20 rounded-full border border-gray-300 shadow-md">
            </td>
            <td>{{$assessment->first_name.' '.$assessment->last_name}}</td>
            <td><a href="{{route('admin.getmail',['email' => json_encode([$assessment->email])])}}" class="underline" title="Click to send email">
              <i class="fa fa-envelope" aria-hidden="true"></i> {{$assessment->email}}</a>
            </td>    
            <td>{{$assessment->telephone}}</td>
            <td>{{date('M d, Y',strtotime($assessment->created_at))}}</td>                                                    
            <td class="d-flex">                
                <div class="flex flex-nowrap justify-between items-center gap-x-1">
                  <a href="{{route('admin.study_assessment.show',[$assessment->id])}}" class="border-2 border-rose-700 rounded-2xl text-xs font-semibold tracking-wide hover:bg-rose-800 hover:border-rose-800 px-2 bg-rose-700 text-gray-100 hover:text-gray-50 py-2 px-4">view</a>
                  <button wire:click='$emit("openModal","admin.delete-study-assessment",@json([$assessment->id]))' 
                      class="border-2 border-gray-700 rounded-2xl text-xs font-semibold tracking-wide hover:bg-gray-200 hover:border-rose-800 px-2 bg-gray-100 text-gray-700 py-2 px-4" type="button">
                      delete                         
                  </button>                    
                </div>                  
            </td>
        </tr>           
        @endforeach                        
      </tbody>
    </table>
    {{$assessments->links()}}
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->