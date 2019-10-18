{{-- @extends('layouts.app')

@section('content')
<nav>
  <div class="nav-wrapper red lighten-2">
    <div class="col s12">
      <a href="/" class="breadcrumb">Home</a>
      <a href="/blog" class="breadcrumb">Blogs</a>
    </div>
  </div>
</nav>
 <div class="row" style="padding: 7vh 7vw">
  <H3>ABSOLUTE GRID</H3>  
  @foreach ($blogs as $blog)
    <div class="col m12">
      <div class="col m12 card s12" style="padding: 3vh 3vw 0 3vw">
      <span class="card-title"> {{str_limit($blog->title, 30, ' .. ' )}} </span>
        {!!str_limit($blog->body, 100, ' ..  <span class="blue-text"> Read more </span>' )!!}
      
    <div class="card-action right">  
      @php
        $url=str_replace(' ', '-', urldecode($blog->title))
       @endphp
      <a href="/blog/{{$blog->id}}-{{$url}}" class="white-text btn black"> Read </a>
    </div>
  </div>
   </div>
  @endforeach
  
 </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

</script>



<style>

  </style> --}}

@extends('layouts.app')

@section('content')

<nav>
  <div class="nav-wrapper red lighten-2">
    <div class="col s12">
      <a href="/" class="breadcrumb">Home</a>
      <a href="/blog" class="breadcrumb">Blogs</a>
    </div>
  </div>
</nav>
<div class="container">
<div class="row">
  <div class="col m8 pd-1 mg-t2">
        <table class="reponsive-table pd-2">
            <tbody>
              @foreach($blogs as $blog)
              <tr>
                  @php
        $url=str_replace(' ', '-', urldecode($blog->title))
       @endphp
      
                <td><a href="/blog/{{$blog->id}}-{{$url}}" class="black-text"><h6> {{str_limit($blog->title, 100, ' .. ' )}} </h6></a></td>
             
              </tr>
              @endforeach
            </tbody>
          </table>
  </div>
 <div class="col m3 offset-m1 pd-1 mg-t2">
   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti nam labore harum eaque hic asperiores. Sit omnis ipsam earum ad ea? Nulla tempore aut debitis illo qui delectus aspernatur dicta odio ipsum corrupti at, obcaecati dolor voluptates! Dolor libero tempore esse eaque quo ipsa nesciunt voluptatum molestias nobis! Expedita, excepturi a? Error dolore architecto illum assumenda repellendus facere? Facilis, incidunt? Laudantium illo enim, asperiores maiores, impedit expedita molestias in cupiditate iure, voluptatibus fugit soluta cum. Dolores, quas modi. Eos, ab quae aliquam tenetur eveniet eius numquam doloribus quisquam dolorem earum illo blanditiis, repellat accusantium eaque laborum itaque ducimus quibusdam iusto consequuntur nisi maxime cum quia vitae. Excepturi, doloremque sed accusantium vitae mollitia et, amet illo voluptas harum dolorem, quam debitis. Possimus, earum temporibus. Maxime laudantium fugit assumenda sit repudiandae totam distinctio reiciendis. Omnis quisquam tenetur debitis, praesentium unde quaerat corrupti laboriosam quis et nulla. Voluptate sed aspernatur asperiores labore vel fuga repellendus unde possimus, enim sapiente amet consequuntur accusamus quisquam distinctio deleniti voluptatem earum nemo. Exercitationem, quisquam error aut accusamus optio ea possimus corrupti iusto illum reiciendis modi voluptatibus. Quod esse quae in quidem impedit debitis nulla voluptatum necessitatibus itaque recusandae. Quisquam tenetur, voluptatem laboriosam praesentium eligendi harum dicta possimus exercitationem, repudiandae omnis quo ab? Pariatur aperiam aspernatur doloribus sed rem numquam, animi illo sapiente molestiae ab voluptates quis et ducimus expedita! Accusantium, autem magnam rerum cupiditate minima repellat, excepturi quod optio molestiae porro modi reiciendis eligendi corporis ea ullam labore, voluptatum maiores a dolorum quia placeat? Nemo, rem culpa perspiciatis exercitationem, tempore error fugiat odio vitae qui, pariatur illo minus praesentium vel ratione voluptatibus consequuntur assumenda dicta distinctio. Sed esse eum molestiae dignissimos laboriosam voluptas expedita, aspernatur debitis explicabo at consequatur commodi voluptates nulla porro ullam rerum excepturi qui impedit accusantium veritatis, maiores totam et. Nobis aliquam illo consequatur repellat, consectetur enim, doloribus aperiam architecto, rerum earum eligendi numquam neque ut ipsam. Cum non quod fuga eos, vitae quae provident pariatur nemo rem ab, qui dolor nisi dolorum placeat labore possimus libero dignissimos recusandae, molestiae obcaecati commodi magnam! Omnis debitis iusto quis. Vitae sapiente illo cupiditate id, quod aliquid quae! Nihil omnis impedit quam ullam qui quaerat suscipit repellendus, provident dolore! Tenetur aliquam alias perferendis sed at excepturi aspernatur explicabo repellat ex, mollitia recusandae rem quasi omnis distinctio veritatis praesentium deleniti deserunt dignissimos laudantium architecto, voluptatum numquam! Asperiores suscipit, alias amet mollitia voluptas reprehenderit quod voluptatum fugiat labore fuga veniam blanditiis unde totam? Error natus obcaecati fuga temporibus tempore explicabo nostrum ipsam cumque! Saepe veniam nam voluptate optio, doloremque beatae sapiente cupiditate aperiam vel. Voluptates quos ea non nisi impedit tempora, dicta, libero assumenda cumque numquam dolorem officia quas excepturi? Vel cumque quibusdam ea harum, culpa quod, nisi nihil, earum blanditiis magni reprehenderit ducimus voluptatem vero illum eius rem. Perferendis ducimus consequatur amet voluptatibus natus reprehenderit dicta rerum mollitia fugit vitae perspiciatis asperiores labore ex facere, dolor ullam aut! Nemo, consectetur nesciunt saepe aliquid rerum omnis dolores repellendus, architecto esse cum nulla maxime voluptas nihil mollitia? Dolorem dolores mollitia, distinctio quod aliquam fugiat unde iusto deleniti quia consequatur qui vero amet itaque laudantium perferendis similique voluptatibus commodi asperiores obcaecati recusandae aspernatur temporibus maxime! Iusto recusandae molestias qui architecto amet! Provident aspernatur veritatis unde neque molestias nesciunt ab autem laborum tenetur, alias illum doloremque. Nisi praesentium soluta officiis cumque eaque odio aut commodi. In tempore nobis doloribus ratione voluptate. Perspiciatis similique atque debitis aspernatur iure sit vitae illum quaerat nobis dignissimos vero repellendus facere placeat, neque mollitia magni beatae eum fuga? Accusamus consectetur quis nesciunt fugit facilis officiis, in expedita minus natus eveniet distinctio autem voluptates. Itaque fugit non asperiores distinctio optio expedita odit. Tempore numquam necessitatibus nam amet quo vitae ipsa commodi aperiam fuga, aspernatur voluptatibus totam. Quia earum autem cum a necessitatibus aut temporibus vero quidem iste. Est delectus voluptate consequuntur quidem, maxime, amet possimus consequatur libero id rem obcaecati quod corrupti sed enim officiis, omnis eligendi placeat excepturi explicabo fugiat? Corporis nihil laborum quaerat nam necessitatibus, inventore repudiandae voluptate porro delectus sed, itaque, perspiciatis tenetur nobis dolor labore? Velit repudiandae esse mollitia iure beatae. Rem debitis modi enim exercitationem veritatis asperiores ipsam atque laboriosam ullam provident, aspernatur maxime animi! Vitae temporibus natus, facilis alias sed animi numquam quasi eveniet! Libero, voluptatibus, nobis non culpa dicta, quasi nisi exercitationem consequuntur dolore alias aperiam? Reiciendis quasi id commodi possimus assumenda, laudantium inventore illum repellendus, itaque ducimus odio eveniet. Sapiente, rerum. Exercitationem vel iste voluptas, distinctio officiis expedita, enim impedit corrupti repellendus sequi rerum laborum dolorem. In aut sapiente neque temporibus, numquam libero suscipit nam alias id? Nemo est quis neque obcaecati saepe voluptates quos at possimus veritatis voluptatum doloribus facilis minima consequuntur numquam id, praesentium mollitia facere itaque. Natus, maiores. A aliquam itaque consequatur molestias provident rem, sint praesentium iste. Eaque cum voluptatibus numquam dolore magni hic, maiores quidem? Ducimus libero officia sit corrupti vero doloribus eum quos accusantium dolor, illo laudantium aperiam nam beatae voluptatem? Iste molestiae nam asperiores modi eos repellat pariatur, molestias numquam accusantium quae suscipit earum voluptates doloremque dolore facere officiis. Quis ex nostrum ab repellat iste labore reprehenderit aspernatur deserunt aut similique, quidem mollitia placeat! Ipsum voluptatum exercitationem saepe officiis recusandae expedita corporis necessitatibus, totam debitis rem asperiores labore eaque, blanditiis hic aspernatur possimus aut magnam dolorem quos earum adipisci, explicabo reprehenderit. Inventore odio quis excepturi perferendis, distinctio tenetur quam expedita libero doloribus repudiandae eos ea praesentium, a voluptates? Ducimus, aperiam magni corrupti ea ipsa exercitationem excepturi nam molestiae expedita debitis facere accusantium eligendi id architecto dignissimos ad tempore blanditiis atque cumque nobis ipsam? Repellat quod quibusdam nisi explicabo culpa, eaque quisquam aperiam atque sed aut quidem molestias esse nemo, necessitatibus minima eos eligendi! Aliquam ipsa expedita illo natus in, iste obcaecati reiciendis eum necessitatibus nulla, recusandae ea sapiente alias! Consectetur sequi non excepturi eum cupiditate id? Quos esse maxime, voluptatem commodi error sit! Corrupti itaque tempora laborum facilis, dolores a dignissimos veniam dolorum tempore similique incidunt blanditiis, et asperiores aliquid eligendi quos voluptatum nulla ratione cumque rerum? Nobis molestiae libero minima ipsum nesciunt.
 </div>
</div>
{{$blogs->links()}}


</div>
@endsection