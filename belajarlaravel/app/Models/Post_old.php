<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "kevin darmawan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aliquid modi ex voluptatum, aut eveniet? Nihil minima quae sint reprehenderit laudantium a repellat unde cupiditate nam ratione, neque alias qui est voluptas in harum iure vel! Magni est necessitatibus, iste fugiat laudantium dignissimos voluptate repellendus voluptatum rem repudiandae magnam debitis, exercitationem libero soluta temporibus voluptatibus pariatur commodi ducimus quas provident nemo consectetur? Eveniet sunt debitis natus quas, ipsam tempora sint dolor nisi ab illum excepturi neque non placeat consectetur in aperiam autem quidem totam commodi inventore fugit asperiores exercitationem? Ut quia assumenda fugit corporis, incidunt in sunt fugiat iste! Vitae officiis fugit voluptatibus odio, ducimus dicta assumenda id voluptas nisi expedita maxime, nesciunt laboriosam dignissimos hic quis ipsa tenetur enim."
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "asep",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, cumque ratione vitae vel animi deleniti? Doloribus eius nostrum corrupti dolores ipsum laborum alias at sint iure quibusdam. Eos, soluta repellendus? Numquam quas quae ea beatae maiores iste officiis atque quaerat quod, provident reiciendis a ipsum repellendus voluptatum? Dolor modi hic enim quidem possimus harum atque cumque mollitia labore excepturi, officia illo iusto exercitationem omnis amet. Doloremque consequatur soluta repellat, quos quibusdam hic fuga enim perspiciatis quo cupiditate amet beatae repudiandae architecto dolores. Debitis, veritatis! Enim eligendi exercitationem sint, inventore, ad itaque eaque dolorum, repudiandae dolor architecto quibusdam veritatis eius beatae consectetur ex iusto! Dolores eum deleniti iste dolore pariatur ab repellendus quae ducimus laboriosam officia, tenetur, rerum optio repudiandae, qui doloribus. Vitae amet sit voluptates atque maxime et repellendus accusantium eum labore? Nulla sint cumque impedit facilis voluptate a voluptas aliquam minus error recusandae. Voluptates fuga illo earum esse perspiciatis vel officiis tempora ullam vitae rem, iusto amet ratione tenetur expedita fugiat similique temporibus iste, dolor asperiores totam sapiente accusamus necessitatibus odit. Hic asperiores animi, sint vitae sit voluptate atque? Odit, fugit vitae hic ducimus, similique facere ipsam fuga consequuntur quia, perferendis recusandae. Sed eum esse obcaecati. Et dolorum inventore illum, ipsum, qui unde quos, temporibus accusantium excepturi autem voluptate facilis consectetur quibusdam laborum nesciunt corporis eaque! Vero quisquam deleniti, ipsum rem minima tenetur fuga quis natus laudantium numquam iure, quo sapiente nisi perspiciatis mollitia? Deleniti sunt voluptate dolore beatae! Rem placeat voluptate quisquam error culpa, incidunt adipisci iusto fuga nisi accusamus labore obcaecati porro itaque soluta in esse quis molestias at sunt, consequatur recusandae et iste nam vitae. Neque pariatur officia deleniti nemo inventore illum, quos laudantium! Quos, quibusdam deleniti. Error aliquid quaerat dolorem inventore eaque possimus accusamus animi aspernatur magnam! Provident dolore doloremque reiciendis ex consectetur excepturi nulla numquam iure velit aspernatur asperiores, facilis praesentium commodi ullam minus laboriosam nam. Quas laudantium accusamus dicta ipsa voluptatibus similique a quis illum vel voluptatem aliquid dolore debitis voluptate mollitia iusto, sed nostrum sequi sint eveniet consectetur provident dignissimos at maiores accusantium? Obcaecati ipsa vitae vero, voluptatum dolore ex fuga cumque minima aliquam culpa amet, iste, incidunt delectus mollitia omnis laudantium odio fugit velit maxime ipsam. Labore cumque illo ad inventore sint hic nihil maiores, quae doloremque saepe, asperiores expedita rerum earum! Quam eaque, dignissimos molestiae minima quasi deleniti reprehenderit laudantium. Repudiandae nesciunt ad, harum aliquam tenetur recusandae illo dolore enim quo adipisci sunt voluptate deserunt soluta quaerat illum quis fugit sint! Deserunt tempore dolores libero soluta, doloremque nesciunt deleniti recusandae molestiae dolorum odio possimus a necessitatibus facere! Quidem, saepe. Cum, vero optio! Culpa, a ratione nulla nisi delectus fugit porro enim dolorum excepturi distinctio nemo molestias nesciunt, incidunt minima in hic. Possimus, aperiam. Vero tempore nihil facilis ea aliquam quia ipsum esse. A, dignissimos incidunt iste perferendis nihil illum cum exercitationem optio, recusandae totam saepe ipsa sapiente voluptatem cupiditate consequatur magni aliquam, sint quam voluptas delectus expedita id voluptatum sunt. Ducimus magnam quia numquam natus corrupti odio molestiae odit debitis!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
