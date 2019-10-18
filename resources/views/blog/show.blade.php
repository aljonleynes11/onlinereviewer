@extends('layouts.app')

@section('content')
<nav>
  <div class="nav-wrapper red lighten-2">
    <div class="col s12">
      <a href="/" class="breadcrumb">Home</a>
      <a href="/blog" class="breadcrumb">Blogs</a>

    <a href="#" class="breadcrumb">{{str_limit($blog->title, 30, ' .. ' )}} </a>
    </div>
  </div>
</nav>

 <div class="row" style="padding: 7vh 4vw">
    <div class="col m8 s12" style="padding: 3vh 3vw 0 1vw">
      @if((auth::check()) && (auth::user()->role=='admins'))
    
      <a href="/blog/{{$blog->id}}/edit" class="btn green left-align"> Edit </a>
      <form method="POST" action="{{ route('blog.destroy', [$blog->id]) }}" style="">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn red" style="margin-top:20px">Delete</button>
      </form>
    @endif
    <h3> {{$blog->title}} </h3>
    <p class="right-align">{{$blog->created_at->diffForHumans()}}</p>
    <div class="divider"></div>
     {!!$blog->body!!}
    </div>

    <div class="col m3">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore ipsa eaque tempore est officiis atque quos ad natus maiores dignissimos, rerum, voluptate quisquam commodi explicabo itaque expedita enim! Possimus saepe dolore culpa suscipit soluta omnis dolorem mollitia ullam facere cumque molestiae architecto iusto voluptatum dolor repellat nisi aut id est earum repudiandae quaerat commodi debitis, quas modi. Id neque animi mollitia voluptatem ducimus! Dicta voluptates sapiente, dignissimos eum modi consequuntur! Quos perferendis consectetur architecto inventore fugit tenetur laboriosam consequuntur, odit praesentium quidem aliquam consequatur, sunt aperiam unde corrupti. Sapiente harum hic a accusamus, quae praesentium asperiores minus ducimus distinctio facere minima veniam consequuntur ex est saepe animi consequatur qui officia fuga labore exercitationem earum ullam? In sit corrupti cupiditate commodi officia vitae provident ex atque id amet. Fuga, quam. Veritatis nostrum iure ut illo enim, quasi sed sint expedita repudiandae, nesciunt cupiditate laborum officia tempore? Fugiat nam natus corrupti, deserunt ipsum nihil mollitia, libero placeat perspiciatis pariatur totam repellat explicabo quis accusantium necessitatibus ipsa earum sequi dolor harum doloremque quae quo tenetur voluptates maiores. Magni cum voluptatibus rem nobis ullam illum distinctio consequuntur provident deserunt incidunt. Fugiat, nihil ipsam. Quo officiis totam veritatis sit quia tenetur exercitationem harum hic placeat numquam doloribus, maiores nobis iste! Recusandae autem, atque porro aut voluptatem maxime ut odit illo nulla laboriosam quidem perferendis qui, exercitationem iste alias consequuntur voluptatibus sed magni blanditiis nobis repellat. Ex facere nam eligendi error atque ut nisi aliquid, iste unde commodi velit id iure exercitationem veniam culpa vero omnis rerum ullam inventore corrupti sed ipsa. Non molestiae quia sequi mollitia, nostrum eveniet maiores beatae nihil pariatur commodi repellat sit saepe laudantium? Expedita rem quia at incidunt nobis repellat dolorum laboriosam iste tempore, obcaecati ea magnam officiis consectetur. Sed commodi doloremque aliquam? Eligendi, reprehenderit maiores laboriosam similique esse quae ducimus eos laudantium iusto odit ab deleniti, suscipit placeat accusamus repudiandae. Quod in hic voluptatibus quasi eligendi fuga eum necessitatibus, animi similique reiciendis quo reprehenderit. Expedita itaque incidunt unde. Nostrum pariatur consequuntur quas architecto magni, id veniam voluptatum magnam quasi praesentium vero maxime! Animi obcaecati magni voluptates debitis quidem pariatur eaque commodi beatae consequatur delectus? Eveniet eum facilis assumenda natus quisquam ratione accusamus libero dolorum ipsam nihil, ex eius. Aperiam deleniti consequuntur, eaque aut ducimus accusantium! Odio sequi in voluptate molestias! Recusandae adipisci omnis cum perferendis rem, modi magni dolorum dignissimos officia veniam! Unde dicta ipsa delectus, ut aspernatur ab facere corporis voluptatibus enim ratione tempore est labore eaque nesciunt esse tempora? Quam exercitationem perspiciatis tempora neque dignissimos obcaecati consequatur sequi et id, vitae atque dicta repudiandae debitis veniam pariatur eveniet reprehenderit porro, repellendus hic blanditiis laboriosam sed voluptas nihil? A nulla et, impedit pariatur atque incidunt iure id suscipit autem sit veniam, ex veritatis nisi. Perspiciatis voluptates natus neque obcaecati nisi vel nobis iusto totam culpa minus incidunt numquam autem ea, nihil, pariatur omnis molestias velit debitis, error in voluptatibus beatae alias? Impedit deserunt expedita perferendis ad itaque amet id laboriosam dolorum! Quisquam eos sed minima. Iure, assumenda dignissimos autem porro delectus qui beatae molestias rem exercitationem, distinctio deleniti. Eum exercitationem recusandae, impedit praesentium at quae minus harum obcaecati neque quidem quod deleniti tempore! Temporibus nesciunt id consequuntur? Consequuntur hic porro beatae voluptate dolore itaque eos nisi voluptas odit, maiores maxime corporis quia sequi ad dignissimos doloremque veritatis! Est facere autem voluptatibus dicta error consequuntur impedit soluta hic, cumque voluptas consequatur placeat similique ad tempora repellendus ex non? Aut a explicabo sint aliquam omnis non incidunt soluta eaque est et, cum maxime at consequatur commodi sunt illo ratione totam voluptates nemo error eos deleniti assumenda. Unde repudiandae enim beatae rerum sit delectus alias laborum placeat vel consequatur illum veritatis quae, error quos, commodi optio quas blanditiis deserunt ad soluta earum, praesentium officiis. Quo quidem numquam atque amet, voluptate perferendis iste minima nulla eum aliquam harum, neque maiores magnam, temporibus provident unde laboriosam. Deleniti neque aut aperiam quasi modi dolorum qui dignissimos placeat error cupiditate! Rem quidem voluptas obcaecati! Nostrum totam labore veritatis nulla, praesentium facilis odit culpa aut eveniet vitae! Veritatis veniam sed optio. Voluptate itaque magni similique praesentium asperiores voluptas? Veniam veritatis quasi corrupti quaerat sit vitae dolorem commodi, harum in odio optio ipsam! Dolores quam voluptates sint, vel quidem at ab dolore minima quisquam ducimus quae fugiat numquam temporibus fugit iusto nostrum mollitia sequi tempore. Unde nobis adipisci, natus nihil quos rerum iusto quod accusamus ducimus illo nostrum repellat sapiente eaque, cumque aut voluptate tenetur debitis, saepe sit. Eligendi, itaque assumenda. Illo totam doloremque eos expedita reprehenderit, autem est! Consequatur facilis laudantium impedit, cumque alias labore eveniet aspernatur aliquid repellendus praesentium! Possimus beatae, iure architecto, ipsum sapiente dolores aut voluptatem qui vero blanditiis laborum laudantium consectetur excepturi! Ipsum porro voluptatum eos esse, nulla voluptate odit illum eaque amet repellendus explicabo dolore quas labore quibusdam officiis repudiandae eum consequuntur reiciendis. Totam perspiciatis perferendis consequuntur cumque odio dolorum autem? Repellendus eum delectus nulla! Doloribus ipsa assumenda, ducimus officia illo dicta ullam deleniti quia itaque vero est cum blanditiis inventore natus culpa earum possimus rem, accusamus eum animi maiores. Quia earum quasi odio a dolorum saepe sapiente dolorem totam harum nam. Dicta esse odio tenetur officia libero aut! Ex maiores aperiam, consequuntur blanditiis voluptas quam culpa ut dolores quis ullam eveniet rerum? Quis hic sapiente ipsum voluptas illum suscipit eveniet omnis mollitia amet dolor, eligendi aperiam saepe optio, quos exercitationem fuga architecto accusamus minus illo ea eius nobis commodi perferendis facere? At deleniti inventore rerum, numquam, accusantium adipisci sit magni, temporibus voluptates ea culpa vero animi rem? Vero omnis, perspiciatis animi atque molestias assumenda expedita repellat fugiat ad fuga, aut in facilis corrupti repudiandae facere deleniti voluptatibus libero, vitae quasi cupiditate! Maxime pariatur suscipit quam optio distinctio repellat nulla earum reprehenderit illo! Illum blanditiis obcaecati cumque aliquid voluptas laboriosam, voluptate, cupiditate fugiat quae repellat repellendus reiciendis expedita deserunt soluta saepe vel magni dolor, numquam veritatis officia deleniti maiores minima? Ab ipsum, officia earum commodi minus dolores quia natus facere illo soluta minima nisi laborum recusandae! Non suscipit natus amet quam vero!
    </div>
  </div>
   
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

</script>



<style>
div.absolute {
  position: absolute;
  top: 80px;
  right: 0;
  width: 200px;
  height: 100px;
  border: 3px solid #73AD21;
}
  </style>