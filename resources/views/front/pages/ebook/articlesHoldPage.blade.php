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
        <div class="create-wrap">
            <div>
                <h2> Searched Results</h2>
            </div>
        </div>
        <table class="table no-border table-ecover mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ARTICLE</th>
                    <th><input onclick="checkAll()" type="checkbox" class="mainCheckBox" /></th>
                </tr>
            </thead>
            <tbody>
                @if ($session_value['articles'] != null)
                    @if (count($session_value['articles']) > 0)
                        @php $counter = 1; @endphp
                        @foreach ($session_value['articles'] as $each_articles)
                        <tr>
                            <td>{{ $counter }}</td>
                            <td>
                                <div>
                                    <h4><b>{{ $each_articles['title'] }}</b></h1>
                                    <p class="text">{{ $each_articles['description'] }}</p>
                                </div>
                            </td>
                            <td>
                                <input type="checkbox" class="smallCheckBox" value="{{ $each_articles['author'] }}">
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
            <button class="btn btn-primary">Create</button>
        </div>      
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
@endsection

@endsection