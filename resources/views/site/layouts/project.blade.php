@include('site.components.head')

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@php
  $project = [ 
  [
  'id' => '1',
    'img' => '\assets\img\project\araraquara-sp.jpg',  
    'customer' => 'Samuel Caitano',
    'city' => 'Araraquara-SP',
],[
'id' => '1',
    'img' => '\assets\img\project\araraquara-sp.jpg',  
    'customer' => 'Camila Maria',
    'city' => 'Catanduva-SP',
]
    
];  
@endphp

<section id="project" class="project-caitan">
  <div class="project-container-caitan">
    <div class="project-wrapper-caitan">
      <div class="project-box-caitan">
        <div class="project-title-caitan">
          <h2>Nossos Projetos</h2>
          <h3>Clientes satisfeitos em todos lugares.</h3>
        </div> 
        @isset($project)
        
        <div class="project-list col-12"> 
          {{-- Mission --}}
          @for ($i = 0; $i < count($project); $i++)
          <div class="project-item col">
            
            <div class="project-item-wrapper">
              <p style="position: absolute;
              /* float: right; */
              color: darkslategray;
              background: white;
              /* position: fixed; */
              text-align: center;
              display: block;
              /* max-width: 100%; */
              margin: 20px;
              padding: 2px 5px;
              border-radius: 25px;
              font-weight: 600;
              box-shadow: 0px 0px 9px 0px darkgrey;">17/10/2022</p>
              <img class="project-item-img" src="{{ $project[$i]["img"] }}" alt=" " srcset="">
            </div>
            <div style="display: flex">
            <div class="project-item-review">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>
            <div class="project-item-customer"><img src="\assets\img\project\Para_Elas_300x.avif" width="40px" class="rounded" alt="">{{ $project[$i]["customer"] }}</div>
            <div class="project-item-city">{{ $project[$i]["city"] }}</div>
          </div> 
          @endfor  
        </div>              
        @endisset 
        
      </div>
    </div>
  </div>
</section>