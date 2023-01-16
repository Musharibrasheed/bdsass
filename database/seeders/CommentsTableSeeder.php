<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'films_id' => 40,
                'user_id' => 1,
                'name' => 'Jack',
                'comments' => 'This was so dreadful it\'s worth watching to laugh at. Sure, it\'s got nice scenery. But that\'s it. The acting is absolutely woeful. In fact, you could play a drinking game with expressions. The cast give long meaningful looks at each other, the only trouble is the specific meaning of the look is utterly lost due to bad acting and worse writing. Take a drink every time they did this and you\'d not last to the end of the film. The shark action is very minimal. Mostly the movie consists of people in a raft being utterly dumb. Seriously, they don\'t unpack the survival box until the second day in the boat. They don\'t conserve the water when it rains, despite having no bottled water left. Every single time the shark attacks they all stand up, the women scream and then they all fall overboard because they are standing. Even when they get to some rusting hulks in the water which are entirely stable, when they see the shark the women scream and fall over into the water. That was my favourite bit. I actually skipped the last five minutes of this. By that stage I didn\'t care if they lived or died. I was rooting for the shark.',
                'created_at' => '2023-01-16 20:12:14',
                'updated_at' => '2023-01-16 20:12:14',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'films_id' => 39,
                'user_id' => 1,
                'name' => 'John',
                'comments' => 'Black Adam what to say such a fantastic movie the crew had done such a great job with the VFX and animation it is a good start for DCEU and the new paths which it will produce for the Fans alone i bet it is a great movie to watch i mean The Rock had done some fabulous work with the Role of Black Adam and Acting ???? other Roles and casting was impressive as well as The story it was straightforward and upright storyline the movie is filled with action pack fights Good scenes i mean such a wonderful cinematography is done the Future of DC looks bright with the Release of such an epic movie i would highly recommend you to watch beside Black Adam other Heroes are worth mentioning like Dr Fate which is a Key character the plot is good and Action is spot on A fresh start for Dc if I would  rate it with marvel movies i mean Black Adam would beat everyone of it .. some Scenes like the slow motion were really well directed.. when dawayne said the prepared for the role he really done and executed the Role really well . DC is finally opening doors to a better future and with such Great work on this movie i know they would Beat Marvel in no time .. Ending statement it is a DC movie on par with Joker , man of steel , dark knight etc Highly suggested Movie with some Great Action fight Sequences Anti Hero surprises , cinematography , VFX , sound and storyline is simple and interesting to me .. Hope DC goes with the same Dark Theme . For their Upcoming movies',
                'created_at' => '2023-01-16 20:13:14',
                'updated_at' => '2023-01-16 20:13:14',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'films_id' => 37,
                'user_id' => 1,
                'name' => 'Jack',
            'comments' => 'Having read the first few Harry Potter books before 2001 and hearing about the hype for the first movie, I was excited. I heard there was going to be an all-British cast (which makes sense, right?) and we\'d get to see a live version of one of the defining novels of our generation. From what I remember I went with my family and a family friend to see the movie the day after Christmas and was pleasantly amazed. After the movie was over, I watched the credits and discovered some familiar names (the late Alan Rickman, Sister Act\'s Maggie Smith, James Bond 007\'s Robbie Coltrane, and Star Wars\' Warwick Davis); others not so familiar (the kids, some of whom had their debut). But it was a good movie and was a party of colors and sights for all to see. This is easily my favorite of all the Harry Potter films. The catalyst of the movie series!',
                'created_at' => '2023-01-16 20:18:35',
                'updated_at' => '2023-01-16 20:18:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'films_id' => 38,
                'user_id' => 1,
                'name' => 'John',
                'comments' => 'When this came out, people were upset that it did not have enough creatures in it. I agreed back then but now after the sequels I realize that Gareth Edwards was trying to focus on the story and not just a CGI fest. I really enjoyed Bryan Cranston\'s character and wish I could have more of that too. While I left wanting more, sometimes that is better than having too much.',
                'created_at' => '2023-01-16 20:27:19',
                'updated_at' => '2023-01-16 20:27:19',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'films_id' => 38,
                'user_id' => 1,
                'name' => 'Jack',
                'comments' => 'The story is about a a gigantic beast looking to wreak havoc on mankind - and he may not be alone.

This movie has one of the best visual effect\'s of the year by far, The fight scenes at the end are so epic and amazing I also cried with joy. And some critics have said the characters are boring but I didn\'t mind them. My favorite scene has to be the sky driving part and yeah I know it only lasted only 2 minutes but the music was scary and chilling and the cinematography was beautiful to look at. Godzilla looked awesome in the movie and the final fight at the end was so bad-ass and so much better then pacific Rim fight scenes. Godzilla\'s roar in this movie was loud and scary. a lot of people said Godzilla didn\'t do anything in this movie and I didn\'t know what there where talking about, Godzilla walked around a couple of times and kicked ass at the end.',
                'created_at' => '2023-01-16 20:32:40',
                'updated_at' => '2023-01-16 20:32:40',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}