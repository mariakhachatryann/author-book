<?php

namespace Database\Seeders;
use App\Models\Book;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pride and Prejudice',
            'description' => 'Pride and Prejudice is the second novel by English author Jane Austen, published in 1813. A novel of manners, it follows the character development of Elizabeth Bennet, the protagonist of the book, who learns about the repercussions of hasty judgments and comes to appreciate the difference between superficial goodness and actual goodness.',
            'publication_year' => 1813,
            'img_path' => 'https://m.media-amazon.com/images/M/MV5BMTA1NDQ3NTcyOTNeQTJeQWpwZ15BbWU3MDA0MzA4MzE@._V1_.jpg'
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'description' => 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraways interactions with mysterious millionaire Jay Gatsby and Gatsbys obsession to reunite with his former lover, Daisy Buchanan.',
            'publication_year' => 1925,
            'img_path' => 'https://i0.wp.com/americanwritersmuseum.org/wp-content/uploads/2018/02/CK-3.jpg?resize=267%2C400&ssl=1'
        ]);

        Book::create([
            'title' => 'Me Before You',
            'description' => 'Me Before You is a romance novel written by Jojo Moyes. The book was first published on 5 January 2012 in the United Kingdom. A sequel titled After You was released on 24 September 2015 through Pamela Dorman Books.[1][2] A second sequel, Still Me, was published in January 2018.[3]',
            'publication_year' => 2012,
            'img_path' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1665087720i/17347634.jpg'
        ]);

        Book::create([
            'title' => 'And Then There Were None',
            'description' => 'And Then There Were None is a mystery novel by the English writer Agatha Christie, who described it as the most difficult of her books to write.[2] It was first published in the United Kingdom by the Collins Crime Club on 6 November 1939, as Ten Little Niggers,[3] after an 1869 minstrel song that serves as a major plot element.[4][5] The US edition was released in January 1940 with the title And Then There Were None, taken from the last five words of the song.[6] Successive American reprints and adaptations use that title, though American Pocket Books paperbacks used the title Ten Little Indians between 1964 and 1986. UK editions continued to use the original title until 1985.The book is the world best-selling mystery, and with over 100 million copies sold is one of the best-selling books of all time. The novel has been listed as the sixth best-selling title (any language, including reference works).[8]',
            'publication_year' => 1939,
            'img_path' => 'https://agathachristie.imgix.net/hcus-paperback/Jacket_AndThenThereWereNoneUS.jpg?auto=compress,format&fit=clip&q=65&w=400'
        ]);

        Book::create([
            'title' => 'The Boy in the Striped Pyjamas',
            'description' => 'The Boy in the Striped Pyjamas is a 2006 historical novel by Irish novelist John Boyne.[1] The plot concerns a German boy named Bruno whose father is the commandant of Auschwitz and Bruno friendship with a Jewish detainee named Shmuel. Boyne wrote the entire first draft in two and a half days, without sleeping much; but also said that he was quite a serious student of Holocaust-related literature for years before the idea for the novel even came to him.[1][2]',
            'publication_year' => 2006,
            'img_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKTHtpetDznlG9FyfbKEDsySD460BCbOmPlglxHcoklQ&s'
        ]);

        Book::create([
            'title' => 'Paper Towns',
            'description' => 'Paper Towns is a novel written by John Green, published on October 16, 2008, by Dutton Books.[2] The novel is about the coming-of-age of the protagonist, Quentin "Q" Jacobsen and his search for Margo Roth Spiegelman, his neighbor and childhood crush. During his search, Quentin and his friends Ben, Radar, and Lacey discover information about Margo.[3]John Green drew inspiration for this book from his experience and knowledge of "paper towns" during a road journey through South Dakota.[4] It debuted at number five on the New York Times bestseller list for childrens books[5] and was awarded the 2009 Edgar Award for best young adult novel.[6] A film adaptation was released on July 24, 2015.',
            'publication_year' => 2008,
            'img_path' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1349013610i/6442769.jpg'
        ]);

        Book::create([
            'title' => 'Rich Dad Poor Dad',
            'description' => 'Rich Dad Poor Dad is a 1997 book written by Robert T. Kiyosaki and Sharon Lechter. It advocates the importance of financial literacy (financial education), financial independence and building wealth through investing in assets, real estate investing, starting and owning businesses, as well as increasing ones financial intelligence (financial IQ).Rich Dad Poor Dad is written in the style of a set of parables based on Kiyosakis life.[1] The titular "rich dad" is his best friends father who accumulated wealth due to entrepreneurship and savvy investing, while the poor dad is claimed to be Kiyosakis own father who he says worked hard all his life but never obtained financial security.The existence of Kiyosakis "Rich Dad" remains unproven, and there is no documentation on Kiyosakis alleged vast reserves of wealth earned before Rich Dad Poor Dad was published.[2].',
            'publication_year' => 2000,
            'img_path' => 'https://m.media-amazon.com/images/I/81bsw6fnUiL._AC_UF1000,1000_QL80_.jpg'
        ]);

        Book::create([
            'title' => 'The Da Vinci Code',
            'description' => 'The Da Vinci Code is a 2003 mystery thriller novel by Dan Brown. It is Browns second novel to include the character Robert Langdon: the first was his 2000 novel Angels & Demons. The Da Vinci Code follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ and Mary Magdalene having had a child together.',
            'publication_year' => 2003,
            'img_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB18kkzz7g872Thj_21q47WiiJr4yLVgvyILed5KIMtQ&s'
        ]);

        Book::create([
            'title' => 'The Personal Librarian',
            'description' => 'The Personal Librarian tells of the lifework of Belle da Costa Greene, the personal librarian to J. P. Morgan, as well as the first director of the Morgan Library & Museum. The book, co-written by Marie Benedict and Victoria Christopher Murray, was published June 2021 by Berkeley Books.The novel follows Belle da Costa Greene as she receives employment from J. P. Morgan and establishes herself in high society while disguising her true identity as a person of color in the early twentieth century. In her time working for J. P. Morgan, she became hugely successful as she purchased rare manuscripts to build Mr. Morgans collection. The novel also speaks to Belles personal life as she struggles with her identity and the historical context in which she lives..',
            'publication_year' => 2021,
            'img_path' => 'https://upload.wikimedia.org/wikipedia/en/0/0c/The_Personal_Librarian.jpeg'
        ]);
    }
}
