<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'first_name' => 'Jane',
            'last_name' => 'Austin',
            'biography' => 'Jane Austen was an English novelist known primarily for her six novels, which implicitly interpret, critique, and comment upon the British landed gentry at the end of the 18th century. Austens plots often explore the dependence of women on marriage for the pursuit of favourable social standing and economic security. Her works are an implicit critique of the novels of sensibility of the second half of the 18th century and are part of the transition to 19th-century literary realism. Her deft use of social commentary, realism and biting irony have earned her acclaim among critics and scholars.',
            'img_path' => 'https://cdn.britannica.com/12/172012-050-DAA7CE6B/Jane-Austen-Cassandra-engraving-portrait-1810.jpg'
        ]);

        Author::create([
            'first_name' => 'Francis Scott',
            'last_name' => 'Fitzgerald ',
            'biography' => 'Francis Scott Key Fitzgerald (September 24, 1896 – December 21, 1940) was an American novelist, essayist, and short story writer. He is best known for his novels depicting the flamboyance and excess of the Jazz Age—a term he popularized in his short story collection Tales of the Jazz Age. During his lifetime, he published four novels, four story collections, and 164 short stories. Although he achieved temporary popular success and fortune in the 1920s, Fitzgerald received critical acclaim only after his death and is now widely regarded as one of the greatest American writers of the 20th century.',
            'img_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_g1mJQHPCuSYEgItTgQ7U74wzZf5WwTxFobjrR9BIIQ&s'
        ]);

        Author::create([
            'first_name' => 'Jojo',
            'last_name' => 'Moyes',
            'biography' => 'Pauline Sara Jo Moyes (born 4 August 1969), known professionally as Jojo Moyes, is an English journalist and, since 2002, an award-winning romance novelist,[1] #1 New York Times best selling author[2] and screenwriter.[3][4] She is one of only a few authors to have twice won the Romantic Novel of the Year Award by the Romantic Novelists Association and her works have been translated into twenty-eight languages[5] and have sold over 40 million copies worldwide.[6]',
            'img_path' =>'https://static01.nyt.com/images/2013/01/06/books/review/0106SCHILLINGER/0106SCHILLINGER-jumbo.jpg?quality=75&auto=webp&disable=upscale'
        ]);

        Author::create([
            'first_name' => 'Agatha',
            'last_name' => 'Christie',
            'biography' => 'Dame Agatha Mary Clarissa Christie, Lady Mallowan, DBE (née Miller; 15 September 1890 – 12 January 1976) was an English writer known for her 66 detective novels and 14 short story collections, particularly those revolving around fictional detectives Hercule Poirot and Miss Marple. She also wrote the worlds longest-running play, the murder mystery The Mousetrap, which has been performed in the West End of London since 1952. A writer during the "Golden Age of Detective Fiction", Christie has been called the "Queen of Crime"—a moniker which is now trademarked by her estate—or the "Queen of Mystery".[1][2] She also wrote six novels under the pseudonym Mary Westmacott. In 1971, she was made a Dame (DBE) by Queen Elizabeth II for her contributions to literature. Guinness World Records lists Christie as the best-selling fiction writer of all time, her novels having sold more than two billion copies.[2]',
            'img_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShLCYW2wxdqj-8y2tq6nCiyJpwwasYUe4yBmULwQkZ2Q&s'
        ]);

        Author::create([
            'first_name' => 'John',
            'last_name' => 'Boyne',
            'biography' => 'John Boyne (born 30 April 1971) is an Irish novelist.[1] He is the author of fourteen novels for adults, six novels for younger readers, two novellas and one collection of short stories. His novels are published in over 50 languages. His 2006 novel The Boy in the Striped Pyjamas was adapted into a 2008 film of the same name.',
            'img_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiM9ozLjKoe3dzDDsNGFfQ4O4BVfKjgopCn7uAQYutdw&s'
        ]);

        Author::create([
            'first_name' => 'John',
            'last_name' => 'Green',
            'biography' => 'John Michael Green (born August 24, 1977) is an American author, YouTuber, podcaster, and philanthropist. His books have more than 50 million copies in print worldwide, including The Fault in Our Stars (2012), which is one of the best-selling books of all time. Greens rapid rise to fame and idiosyncratic voice are credited with creating a major shift in the young adult fiction market. Green is also well known for his work in online video, most notably his YouTube ventures with his brother Hank Green.',
            'img_path' => 'https://pbs.twimg.com/profile_images/1678802624089292809/xSoYbH7m_400x400.jpg'
        ]);

        Author::create([
            'first_name' => 'Robert',
            'last_name' => 'Kiyosaki',
            'biography' => 'Robert Toru Kiyosaki (born April 8, 1947) is an American businessman and author, known for the Rich Dad Poor Dad series of personal finance books. He is the founder of the Rich Dad Company, a private financial education company that provides personal finance and business education to people through books and videos, and Rich Global LLC, which filed for bankruptcy in 2012.[1]',
            'img_path' => 'https://smartasset.com/wp-content/uploads/sites/2/2017/09/rsz_robert-standard-1.jpg'
        ]);

        Author::create([
            'first_name' => 'Dan',
            'last_name' => 'Brown',
            'biography' => 'Daniel Gerhard Brown (born June 22, 1964) is an American author best known for his thriller novels, including the Robert Langdon novels Angels & Demons (2000), The Da Vinci Code (2003), The Lost Symbol (2009), Inferno (2013), and Origin (2017). His novels are treasure hunts that usually take place over a period of 24 hours.[3] They feature recurring themes of cryptography, art, and conspiracy theories. His books have been translated into 57 languages and, as of 2012, have sold over 200 million copies. Three of them, Angels & Demons, The Da Vinci Code, and Inferno, have been adapted into films, while one of them, The Lost Symbol, was adapted into a television show.',
            'img_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGrcfENghmE6mlDEs6iUJmOAQrM5OT53Pxfuz9Cj_dEg&s'
        ]);

        Author::create([
            'first_name' => 'Heather',
            'last_name' => 'Terrell',
            'biography' => 'Heather Benedict Terrell (born November 24, 1968)[2] is an American novelist and lawyer who writes some of her novels under the pen name Marie Benedict. Terrell attended and graduated from Upper St. Clair High School in Pittsburgh. She then studied History and Art History at Boston College, where she graduated magna cum laude.[4] She then attended and graduated cum laude[4] from Boston University School of Law.[2]Terrell lives in Pittsburgh with her husband Jim Terrell and their two children.',
            'img_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeW3PO_jAeB9gJkGqZYBcYi3prSJ7H1sL5CMXpY8azvw&s'
        ]);

        Author::create([
            'first_name' => 'Victoria',
            'last_name' => 'Christopher Murray',
            'biography' => 'Victoria Christopher Murray is an American editor and author of over 30 books, with "more than one million books in print."[1]Murray was born in Queens, New York.[2] She received a Bachelor of Arts in Communication Disorders from Hampton University[2] and a Master of Business Administration from New York University Stern School of Business.[1][3] She is a member of Delta Sigma Theta.[2]Murray now spends her time in Washington, D.C. and Los Angeles.[4]',
            'img_path' => 'https://victoriachristophermurray.com/wp-content/uploads/2020/06/JFP_6431-1-scaled.jpeg'
        ]);
    }
}
