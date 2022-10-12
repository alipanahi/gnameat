@extends('master')
  @section('title','i miei punit')
  @section('style')
    <style>
      * {
        box-sizing: border-box;
      }
      .gradient {
        background: #437170;
      }
      #loyaltyCard{
        
        position:relative;
        width:450px;
        height:240px;
        box-shadow:0 0 10px #000;
        border-radius:10px;
        padding:15px;
        
      }

      #loyaltyCard::before{
        content:"";
        background-image: url('{{URL::asset("/images/card.png")}}');
        opacity:0.3;
        background-size:cover;
        position:absolute;
        left:0;
        right:0;
        top:0;
        bottom:0;
        width:100%;
        height:100%;
        z-index:-3;
        border-radius:10px;
        
      }
      .cardContent{
        display:grid;
        row-gap:10px;
        grid-template-areas:
                            'title name name'
                            'point-title point logo'
                            'barcode barcode barcode';
        grid-auto-columns:40% 10% 50%;
      }
      .point-title, .point{
        grid-erea:point-title;
        justify-self:start;
        align-self:center;
        font-size:1.5em;
      }
      
      @media only screen and (max-width: 600px) {
        #loyaltyCard{
          width:85%;
          min-height:180px;
          height: auto;
          padding:10px;
          
        }
        .cardContent{
          row-gap:5px;
        }
        .point-title, .point{
          font-size:1.3em;
        }
        .footer-logo{
          order:1;
        }
        .footer-links{
          order:2;
        }
        .footer-copyright{
          order:3;
          font-size: 4vw;
        }
      }
      @media only screen and (max-width: 300px) {
        #loyaltyCard{
          width:95%;
          min-height:80px;
          height: auto;
          padding:5px;
          
        }
        .cardContent{
          row-gap:3px;
        }
        .point-title, .point{
          font-size:1em;
        }
        .name, .title{
          font-size:12px;
        }
        .footer-copyright{
          font-size: 3vw;
        }
      }
    </style>
  @endsection
  @section('menu')
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center" style="color:#923116">
            <li class="mr-3">
              <a href="{{route('my-points')}}">Punti</a>
            </li>
            <li class="mr-3">
              <a href="{{route('my-used-points')}}">Punti usati</a>
            </li>
            <li class="mr-3">
              <form method="POST" action="{{route('logout')}}">
                  @csrf
                  <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://localhost:8000/logout" onclick="event.preventDefault();
                                      this.closest('form').submit();">log out</a>
              </form>
            </li>
          </ul>
          
        </div>
  @endsection
  @section('content')
 
  <div class="pt-24" > 
    <div style="text-align:center;">
      <h1 class="point">i punti usati</h1>
      <br>
      <table class="text-sm text-left" style="margin:0 auto;font-size:1.2em;text-align:center;">
        <thead class="text-xs uppercase" style="color:#923116">
          <tr>
            <th scope="col" class="py-3 px-6">Data</th>
            <th scope="col" class="py-3 px-6">Punti usati</th>
          </tr>
        </thead>
        <tbody>
          
          @if(count($data)>0)
            @foreach($data as $item)
              <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6">{{$item->date}}</td>
                <td class="py-4 px-6">{{$item->point}}</td>
              </tr>
            @endforeach
            
          @else
            <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
              <td class="py-4 px-6" colspan="3">non c'è nessun record</td>
            </tr>
          @endif
          
          
        </tbody>
        {{$data->links()}}
      </table>
      
    </div>
  </div>
    <br>
    <br>
    <!-- the curv -->
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
      
    </div>
    <script>
      window.onload = function() {
        document.querySelector('[role="navigation"]').classList.remove('flex');
        
      }
    </script>
  @endsection
  