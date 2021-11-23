@php $pageTitle = 'Article List' @endphp
@extends('front.layouts.design')

@section('extra_css')  
<style>

    .text{
        font-size: 19px;
    }

</style>
@endsection

@section('content')

<div class="content-section">
    <div class="container-fluid custom-padding">
        {{-- <div class="create-wrap">
            <div> --}}
                <form id="live-search" action="" class="styled" method="post">
                    
                        <input type="text" class="form-control w-100" id="filter" value="{{ $keywords }}" style="border-radius: 1rem; box-shadow: 1px 2px 3px #b7b3b3, -2px 1px 3px #b7b3b3;" />
                        <span id="filter-count"></span>
                    
                </form>
            {{-- </div>
        </div> --}}
        <form action="{{ route('articleSelected') }}" method="POST">@csrf
            <table class="table no-border table-ecover mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ARTICLE</th>
                        <th><input onclick="checkAll()" type="checkbox" class="mainCheckBox" /></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($result != null)
                        @if (count($result) > 0)
                            @php $counter = 1; @endphp
                            @foreach ($result as $each_articles)
                            <tr class="featured_outer">
                                <td>{{ $counter }}</td>
                                <td>
                                    <div>
                                        <h4 class="text-dark">{{ $each_articles['title'] }}</h4>
                                        <input type="hidden" name="title[]" value="{{ $each_articles['title'] }}">

                                        <p class="text-dark" style="font-size: 16px;">{{ $each_articles['description'] }}</p>
                                        <input type="hidden" name="description[]" value="{{ $each_articles['description'] }}">

                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-grow-1 bd-highlight"><span class="text-dark">Author:</span> <span class="font-weight-bold">{{ $each_articles['author'] }}</span>
                                                <input type="hidden" name="author[]" value="{{ $each_articles['author'] }}">
                                            </div>

                                            <div class="p-2 bd-highlight"><span class="text-dark">Source:</span> <a href="{{ $each_articles['url'] }}" target="_blank"  class="text-danger">{{ $each_articles['source']['name'] }}</a></div>

                                            <div class="p-2 bd-highlight"><span class="text-dark">Date Published:</span> <span class="font-weight-bold">{{ Carbon\Carbon::parse($each_articles['publishedAt']) }}</span></div>
                                        </div>
                                        
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="smallCheckBox" name="articleChecked[]">
                                </td>
                            </tr>
                            @php $counter++ @endphp    
                            @endforeach
                        @else
                            <tr><td>No Data Available at this Moment</td></tr>
                        @endif
                    @else
                        <tr><td>No Data Available at this Moment</td></tr>
                    @endif     
                </tbody>
            </table>

            <div class="text-right mb-5">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>   
        </form>   
    </div>
</div>

    @section('extra_div')
    
    @endsection 



@section('extra_js')  
<script>
   function checkAll() {
        if($(".mainCheckBox").is(':checked')){
            $(".smallCheckBox").prop('checked', true);
        }else{
            $(".smallCheckBox").prop('checked', false);
        }
    }
</script>

<script>
    //filter fxn
    $(document).ready(function(){
       $("#filter").keyup(function(){
    
          // Retrieve the input field text and reset the count to zero
          var filter = $(this).val(), count = 0;
    
          // Loop through the comment list
          $(".featured_outer").each(function(){
    
                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                   $(this).fadeOut();
    
                // Show the list item if the phrase matches and increase the count by 1
                } else {
                   $(this).show();
                   count++;
                }
          });
    
          // Update the count
          var numberItems = count;
          $("#filter-count").text("Articles = "+count);
       });
    });

  </script>
@endsection

@endsection