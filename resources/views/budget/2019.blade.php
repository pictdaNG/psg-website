@extends('layouts.app')

@section('title')
    2019 Approved Budget | Plateau State Government Website
@endsection

@section('header')
    2019 Approved Budget
@endsection

@section('subheader')
    2019 Approved Budget
@endsection

@section('scripts')
    <script>

      /**
       *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
       *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
      // var disqus_config = function () {
      // this.page.url = "https://plateaustate.gov.ng/budget";  // Replace PAGE_URL with your page's canonical URL variable
      // this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
      // };
      (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://plsg-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
      })();
    </script>
@endsection

@section('content')
    <div class="content uk-width-1-2@m">
        <h4>2019 Approved Budget</h4>
        <table class="uk-table uk-table-hover uk-table-divider">
          <thead>
            <tr>
              <td>
                Document Title
              </td>
              <td>
                Date of Entry
              </td>
              <td>
                Action
              </td>
            </tr>
          </thead>
            <tbody>
                <tr>
                    <td>2019 Approved Budget</td>
                    <td>05 April, 2019</td>
                    <td>
                        <a href="{{ URL::asset('assets/documents/PLATEAU-STATE-2019-APPROVED-BUDGET.pdf') }}" target="_blank">Download Budget</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div id="disqus_thread"></div>
        <noscript>
          Please enable JavaScript to view the 
          <a href="https://disqus.com/?ref_noscript">
            comments powered by pictda.
          </a>
        </noscript>
    </div>
@endsection