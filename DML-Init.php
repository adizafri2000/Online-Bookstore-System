<?php

    //Init connection to DB
    $connect = mysqli_connect("localhost","root","","chunchunmaru");

    //User insertion
    $query = "INSERT INTO User (userEmail, userPwd, userName,Address) 
        VALUES(
            '1181101286@student.mmu.edu.my',
            'adi',
            'Adi Zafri',
            '32, Taman Sedia Tanah Rata, 39000 Cameron Highlands, Pahang')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO User (userEmail, userPwd, userName,Address) 
        VALUES(
            '1181101285@student.mmu.edu.my',
            'iffah',
            'Iffah Nadhrah',
            'No. 240, Padang Lalang, 14000 Bukit Mertajam, Penang')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO User (userEmail, userPwd, userName,Address) 
        VALUES(
            '1181102427@student.mmu.edu.my',
            'leeghimhuang',
            'Lee Ghim Huang',
            'Jalan PSK 6, Seri Kembangan Commercial Centre Seri kembangan, 43300 Seri Kembangan, Selangor')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO User (userEmail, userPwd, userName,Address) 
        VALUES(
            '1181101444@student.mmu.edu.my',
            'faiz',
            'Muhammad Faiz',
            '46 Jalan USJ 10/1E, 47600 Subang Jaya, Selangor')";
    $result = mysqli_query($connect,$query);

    //Admin insertion
    $query = "INSERT INTO Admin (adminEmail, adminPwd, admiName) 
        VALUES(
            'adi@gmail.com',
            '1181101286',
            'Adi Zafri Admin')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Admin (adminEmail, adminPwd, admiName) 
        VALUES(
            'iffah@gmail.com',
            '1181101285',
            'Iffah Admin')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Admin (adminEmail, adminPwd, admiName) 
        VALUES(
            'ghimhuang@gmail.com',
            '1181102427',
            'Lee Ghim Huang Admin')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Admin (adminEmail, adminPwd, admiName) 
        VALUES(
            'faiz@gmail.com',
            '1181101444',
            'Faiz Admin')";
    $result = mysqli_query($connect,$query);

    //Book insertion
    
    //Cooking
    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789814828604',
            'Tan Phay Shing',
            'MARSHALL CAVENDISH',
            'Creative Baking: Macaron Basics (Creative Baking Series)',
            'Creative Baking: Macaron Basics is a companion title to Phay Shing\'s first title, Creative Baking: Macaron, and is a guide to mastering the basic techniques of making decorated macarons.',
            2019,
            5,
            'Cooking',
            69.90)";
    $result = mysqli_query($connect,$query);

    
    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789674151850',
            'Goo Chui Hoong',
            'MPH Publishing',
            'Goo Chui Hoong\'s Lite Malaysian Favourites (MPH Masterclass Series)',
            'Lite Malaysian Favourites shows how easy it is to eat healthily. Some of the recipes in this book are dishes commonly found at hawker stalls or restaurants which have been given a twist to make them healthier.',
            2014,
            1,
            'Cooking',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789814779814',
            'Chef Wan',
            'MARSHALL CAVENDISH',
            'The Best of Chef Wan: A Taste of Malaysia (Volume 1)',
            'Malaysia\'s Culinary Ambassador and Asia\'s most notable chef, Chef Wan shares more than 60 of his favourite Asian recipes in his book, The Best of Chef Wan Volume 1.',
            2007,
            7,
            'Cooking',
            59.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780600623595',
            'Emma Jane Frost',
            'Hamlyn',
            'Hamlyn QuickCook: Family Meals',
            'Family Meals offers the perfect alternative to dinner in front of the TV by showing you how to use limited ingredients, simple methods and minimal time to create delicious and healthy family meals.',
            2013,
            2,
            'Cooking',
            25.00)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780399579851',
            'James Oseland',
            'Ten Speed Pr (US)',
            'World Food Mexico City : Heritage Recipes for Classic Home Cooking',
            '75 recipes, evocative storytelling, and beautiful photography provide a lens into one of the planet\'s most interesting culinary destinations: Mexico City',
            2020,
            9,
            'Cooking',
            119.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780393089042',
            'Fuchsia Dunlop',
            'W W Norton & Co Inc (US)',
            'Every Grain of Rice : Simple Chinese Home Cooking',
            'A culinary reference features southern Chinese recipes, shares a comprehensive introduction to key seasonings and techniques, and offers such options as smoky eggplant with garlic, twice-cooked pork, and emergency midnight noodles.',
            2013,
            11,
            'Cooking',
            185.42)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241455159',
            'Rebecca Wilson',
            'Dk Pub (GB)',
            'What Mummy Makes : Cook Just Once for You and Your Baby',
            'SUNDAY TIMES BESTSELLER Wordery\'s Book of The Year 2020: Food and Drink - WINNER 130+ recipes all suitable from 6 months old Wean your baby and feed your family at the same time by cooking just one meal in under 30 minutes that everyone will enjoy! Say goodbye to cooking multiple meals every day and the faff of making special little spoonfuls for your baby, plainer dishes for fussy older siblings, and something different again for the grown-ups.',
            2020,
            5,
            'Cooking',
            86.95)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241431153',
            'Jamie Oliver',
            'Penguin Books Ltd (GB)',
            '7 Ways : Easy Ideas for Every Day of the Week',
            'Make everyday meals more exciting with the brand-new No. 1 bestselling cookbook, featuring 120 exciting and tasty new recipes, including recipes from Jamie\'s hit Channel 4 TV show Keep Cooking Family Favourites',
            2020,
            7,
            'Cooking',
            150.95)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781607742739',
            'Ken Forkish',
            'Ten Speed Pr (US)',
            'Flour Water Salt Yeast : The Fundamentals of Artisan Bread and Pizza',
            'In Flour Water Salt Yeast, author Ken Forkish demonstrates that high-quality artisan bread and pizza is within the reach of any home baker. Whether it\'s a basic straight dough, dough made with a pre-ferment, or complex levain, each of Forkish\'s impeccable recipes yields exceptional results.',
            2012,
            9,
            'Cooking',
            159.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241453124',
            'Meal Prep King',
            'Penguin Books Ltd (GB)',
            'Meal Prep King Plan : Save time. Lose weight. Eat the meals you love',
            'Lose weight for good with great-tasting, easy-to-cook recipes from The Meal Prep King Plan Together, John and Charlotte have lost an incredible 15-stone, and they are here to show you how to lose weight and feel your best - the easy way.',
            2020,
            8,
            'Cooking',
            116.00)";
    $result = mysqli_query($connect,$query);

    //Fantasy
    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781408855690',
            'J.K Rowling',
            'Bloomsbury Publishing PLC',
            'Harry Potter and the Order of the Phoenix',
            'Dark times have come to Hogwarts. After the Dementors\' attack on his cousin Dudley, Harry Potter knows that Voldemort will stop at nothing to find him. There are many who deny the Dark Lord\'s return, but Harry is not alone: a secret order gathers at Grimmauld Place to fight against the Dark forces. Harry must allow Professor Snape to teach him how to protect himself from Voldemort\'s savage assaults on his mind. But they are growing stronger by the day and Harry is running out of time.',
            2004,
            12,
            'Fantasy',
            59.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781408855713',
            'J.K Rowling',
            'Bloomsbury Publishing PLC',
            'HARRY POTTER AND THE DEATHLY HALLOWS',
            'As he climbs into the sidecar of Hagrid\'s motorbike and takes to the skies, leaving Privet Drive for the last time, Harry Potter knows that Lord Voldemort and the Death Eaters are not far behind. The protective charm that has kept Harry safe until now is now broken, but he cannot keep hiding. The Dark Lord is breathing fear into everything Harry loves, and to stop him Harry will have to find and destroy the remaining Horcruxes. The final battle must begin – Harry must stand and face his enemy.',
            2008,
            1,
            'Fantasy',
            59.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780316552561',
            'Natsume Akatsuki',
            'Yen Pr (US)',
            'Konosuba God\'s Blessing on This Wonderful World! 1',
            'Kazuma Sato is a video game-loving shut-in-or at least he was, until a humiliating traffic accident brings his young life to an untimely end. But after his death, a beautiful girl claiming to be a goddess invites him to enter another world and gain some respectable perks in the process. But Kazuma\'s choice is going to have serious consequences for the goddess and the dead man alike...',
            2016,
            5,
            'Fantasy',
            60.45)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781975320287',
            'Tappei Nagatsuki',
            'Yen Pr (US)',
            'Re Zero Starting Life in Another World 1 : The Sanctuary and the Witch of Greed',
            'After the battle against the Witch Cult\'s Archbishop of Sloth, Subaru is set to reunite with Emilia, but new trials and tribulations await. As another chapter unfolds, Subaru heads toward the holy territory of the Witch.',
            2021,
            8,
            'Fantasy',
            61.49)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781529308419',
            'Stephen King',
            'HODDER & STOUGHTON',
            'Elevation',
            'Although Scott Carey doesn\'t look any different, he\'s been steadily losing weight. There are a couple of other odd things, too. He weighs the same in his clothes and out of them, no matter how heavy they are. Scott doesn’t want to be poked and prodded. He mostly just wants someone else to know, and he trusts Doctor Bob Ellis.',
            2000,
            7,
            'Fantasy',
            42.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781529402025',
            'Eoin Coffer',
            'QUERCUS',
            'Highfire',
            'Indulge in this tale of fiery fire and dragons.',
            2010,
            10,
            'Fantasy',
            79.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781471193071',
            'Katie Tsang',
            'Simon & Schuster',
            'DRAGON REALM 01 : DRAGON MOUNTAIN',
            'A group of youngsters team up to battle dragons that reside next to their village.',
            2011,
            4,
            'Fantasy',
            49.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781416524526',
            'Stephen King',
            'POCKET',
            'The Dark Tower',
            'A much-anticipated final installment in the epic series that began thirty-three years ago with The Gunslinger completes the quest of Roland Deschain, who works to outmaneuver the increasingly desperate acts of his adversaries and confronts losses within his circle of companions.',
            2016,
            3,
            'Fantasy',
            44.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781471183867',
            'Harrison Michelle',
            'Simon & Schuster',
            'A Sprinkle of Sorcery',
            'Three wizards take journey across the sea.',
            2009,
            1,
            'Fantasy',
            49.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781474978491',
            'Sophie Anderson',
            'Usborne Publishing Ltd',
            'The Castle of Tangled Magic',
            'A teenage girl mysteriously finds a castle behinds her house and explores it.',
            2014,
            8,
            'Fantasy',
            44.90)";
    $result = mysqli_query($connect,$query);

    //Health
    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789674154400',
            'Gan Siew Hua',
            'MPH Publishing',
            'TIPS ON USING COMMON MEDICINES SAFELY',
            'Written in an easily understood Q&A format, TIPS ON USING COMMON MEDICINES SAFELY provides information on how to maximise the use of common medicines while minimising the impact of their side effects. It also gives concise information on how to avoid harmful interactions with other drugs, food, herbs and vitamins.',
            2015,
            8,
            'Health',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781509852505',
            'Michael Greger',
            'Pan Macmillan (GB)',
            'HOW NOT TO DIE (UK)',
            'Teaches you literally to not die. Enjoy life with our various tips provided.',
            2020,
            1,
            'Health',
            64.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780062309815',
            'David Wolfe',
            'HARPER COLLINS PUB. UK',
            'The Beauty Diet',
            'This book guides you on how to stay on a diet while maintaining your beauty.',
            2020,
            7,
            'Health',
            86.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781846045714',
            'Deepak Chopra',
            'RANDOM HOUSE (UK)',
            'THE HEALING SELF',
            'Guides readers on healing themselves with the help of nature and environment.',
            2011,
            9,
            'Health',
            42.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781743795965',
            'Luigi Fontana',
            'Hardie Grant Books (US)',
            'The Path to Longevity : How to Reach 100 with the Health and Stamina of a 40-Year-Old',
            'The Path to Longevity is a roadmap to living a long, healthy life. In it, Dr Luigi Fontana, Professor of Medicine and Nutritional Science, summarises more than 20 years of research on preventative medicine, clinical practice, and his accumulated knowledge on healthy longevity, using an evidence-based approach.',
            2020,
            1,
            'Health',
            106.35)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780141978611',
            'Bessel van der Kolk',
            'Penguin Books Ltd (GB)',
            'The Body Keeps the Score: Mind, Brain and Body in the Transformation of Trauma',
            'What causes people to continually relive what they most want to forget, and what treatments could help restore them to a life with purpose and joy? Here, Dr Bessel van der Kolk offers a new paradigm for effectively treating traumatic stress.',
            2015,
            9,
            'Health',
            63.95)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780785838302',
            'Kiki Ely',
            'Chartwell Books (US)',
            'The Complete Guide to Self Care : Best Practices for a Healthier and Happier You',
            'Self-care is far from selfish. Learn lots of new mantras, tips, tricks, and crafts to help balance out all the moving parts in your life with The Complete Guide to Self-Care.',
            2020,
            7,
            'Health',
            85.14)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241426289',
            'Neal\'s Yard Remedies',
            'Dk Pub (GB)',
            'Neal\'s Yard Remedies Healing Herbs: Treat Yourself Naturally with Homemade Herbal Remedies',
            'Find your route to natural wellness with Neal\'s Yard Remedies\' expert guide to using medicinal herbs.',
            2020,
            11,
            'Health',
            110.50)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781788401661',
            'Lilin Yang',
            'Cassell (US)',
            'The Korean Skincare Bible : The Ultimate Guide to K-Beauty Secrets',
            'The Korean Skincare Bible is your expert guide to achieving radiant, flawless skin, every day.',
            2019,
            3,
            'Health',
            55.00)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780008436209',
            'Jason Fung',
            'Thorsons (GB)',
            'The Cancer Code: A Revolutionary New Understanding of a Medical Mystery',
            'Our understanding of cancer is slowly undergoing a revolution, allowing for the development of more effective treatments. For the first time ever, the death rate from cancer is showing a steady decline ... but the \'War on Cancer\' has hardly been won.',
            2020,
            1,
            'Health',
            91.74)";
    $result = mysqli_query($connect,$query);

    //Horror
    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789814315715',
            'James Lee',
            'Angsana Books',
            'MR. MIDNIGHT 91: RUN! ITS THE RUBBER MAN!',
            'The Rubber Man wanders the school compound at night to prey on children.',
            2019,
            6,
            'Horror',
            12.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789814315708',
            'James Lee',
            'Angsana Books',
            'MR. MIDNIGHT 90: RIVERBOAT GHOSTS',
            'Wanna go on a tour on the riverboat? Sure, just make sure your bringing blessings to shoo the white beings away.',
            2019,
            5,
            'Horror',
            12.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789810013462',
            'Russell Lee',
            'Angsana Books',
            'True Singapore Ghost Stories 01',
            'Real-life stories of encounters with the paranormal beings.',
            2006,
            1,
            'Horror',
            19.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789810025298',
            'Russell Lee',
            'Angsana Books',
            'True Singapore Ghost Stories 02',
            'Real-life stories of encounters with the paranormal beings.',
            2006,
            6,
            'Horror',
            19.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781444783247',
            'Stephen King',
            'HODDER & STOUGHTON',
            'Doctor Sleep',
            'King says he wanted to know what happened to Danny Torrance, the boy at the heart of The Shining, after his terrible experience in the Overlook Hotel. The instantly riveting Doctor Sleep picks up the story of the now middle-aged Dan, working at a hospice in rural New Hampshire, and the very special twelve-year old girl he must save from a tribe of murderous paranormals.',
            2013,
            8,
            'Horror',
            31.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781501121173',
            'Stephen King',
            'Simon & Schuster',
            'Revival',
            'A spectacularly dark and electrifying novel about addiction, religion, music and what might exist on the other side of life.',
            2011,
            2,
            'Horror',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781982114312',
            'Stephen King',
            'Simon & Schuster',
            'The Outsider',
            'What would you do if an outsider trespasses your private residence and hunts you?',
            2009,
            7,
            'Horror',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781787632530',
            'Alexis Henderson',
            'Transworld (GB)',
            'Year of the Witching',
            'In the lands of Bethel, where the Prophet\'s word is law, Immanuelle Moore\s very existence is blasphemy. The daughter of a union with an outsider that cast her once-proud family into disgrace, Immanuelle does her best to worship the Father, follow Holy Protocol and lead a life of submission, devotion and absolute conformity, like all the women in the settlement. But a chance mishap lures her into the forbidden Darkwood that surrounds Bethel - a place where the first prophet once pursued and killed four powerful witches. Their spirits are still walking there, and they bestow a gift on Immanuelle: the diary of her dead mother, who Immanuelle is shocked to learn once sought sanctuary in the wood.',
            2020,
            9,
            'Horror',
            79.95)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781728220147',
            'Darcy Coates',
            'Poisoned Pen Pr (US)',
            'The Haunting of Blackwood House',
            'With a childhood filled with seances and scam mediums, Mara, the daughter of spiritualists, finds her beliefs questioned when she and her fiance buy Blackwood House, a derelict property rumored to be haunted.',
            2020,
            9,
            'Horror',
            70.50)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781789095296',
            'Stephen Graham Jones',
            'Titan Books Ltd (GB)',
            'Only Good Indians',
            'Adam Nevill\'s The Ritual meets Liane Moriarty\'s Big Little Lies in this atmospheric gothic literary horror.',
            2020,
            1,
            'Horror',
            52.75)";
    $result = mysqli_query($connect,$query);

    //Romance
    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632367747',
            'Negi Haruba',
            'Kodansha Comics (US)',
            'The Quintessential Quintuplets 1',
            'Futaro Uesugi is a second-year in high school, scraping to get by and pay off his family\'s debt. The only thing he can do is study, so when Futaro receives a part-time job offer to tutor the five daughters of a wealthy businessman, he can\'t pass it up. Little does he know, these five beautiful sisters are quintuplets, but the only thing they have in common is that they\'re all terrible at studying! At this rate, the sisters can\'t graduate, and Futaro must think of a plan that suits each of them - which feels hopeless when five-out-of-five of these girls think he\'s a loser!',
            2019,
            3,
            'Romance',
            49.89)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632369970',
            'Reiji Miyajima',
            'Kodansha Comics (US)',
            'Rent-a-Girlfriend 1',
            'You can rent a girlfriend, but can you buy love? Hapless freshman Kazuya, reeling from a bad breakup, buys a few hours at the aquarium with the beautiful, polite Chizuru. But rock bottom might be so much lower than he thought! Family, school, and life all start to go wrong, and to make matters worse, Chizuru is much more than the pretty face and sweet demeanor he thought he had bargained for!',
            2020,
            7,
            'Romance',
            58.97)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781335474605',
            'Susan Mallery',
            'HARLEQUIN BOOKS',
            'WHY NOT TONIGHT',
            'A romantic tale of a newlywed couple whom try new things as a pair.',
            2009,
            1,
            'Romance',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632367754',
            'Negi Haruba',
            'Kodansha Comics (US)',
            'The Quintessential Quintuplets 2',
            'Futaro Uesugi is a second-year in high school, scraping to get by and pay off his family\'s debt. The only thing he can do is study, so when Futaro receives a part-time job offer to tutor the five daughters of a wealthy businessman, he can\'t pass it up. Little does he know, these five beautiful sisters are quintuplets, but the only thing they have in common is that they\'re all terrible at studying! At this rate, the sisters can\'t graduate, and Futaro must think of a plan that suits each of them - which feels hopeless when five-out-of-five of these girls think he\'s a loser!',
            2019,
            6,
            'Romance',
            49.89)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632367761',
            'Negi Haruba',
            'Kodansha Comics (US)',
            'The Quintessential Quintuplets 3',
            'Futaro Uesugi is a second-year in high school, scraping to get by and pay off his family\'s debt. The only thing he can do is study, so when Futaro receives a part-time job offer to tutor the five daughters of a wealthy businessman, he can\'t pass it up. Little does he know, these five beautiful sisters are quintuplets, but the only thing they have in common is that they\'re all terrible at studying! At this rate, the sisters can\'t graduate, and Futaro must think of a plan that suits each of them - which feels hopeless when five-out-of-five of these girls think he\'s a loser!',
            2019,
            1,
            'Romance',
            49.89)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632369987',
            'Reiji Miyajima',
            'Kodansha Comics (US)',
            'Rent-a-Girlfriend 2',
            'You can rent a girlfriend, but can you buy love? Hapless freshman Kazuya, reeling from a bad breakup, buys a few hours at the aquarium with the beautiful, polite Chizuru. But rock bottom might be so much lower than he thought! Family, school, and life all start to go wrong, and to make matters worse, Chizuru is much more than the pretty face and sweet demeanor he thought he had bargained for!',
            2020,
            2,
            'Romance',
            58.97)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781975359621',
            'Hajime Kamoshida',
            'Yen Pr (US)',
            'Rascal Does Not Dream of Bunny Girl Senpai 1',
            'Bunny girls do not live in libraries. This is simply common sense. And yet, that\'s exactly where Sakuta runs into one in the wild. More bewildering is who the bunny girl is: Mai Sakurajima, an upperclassman and well-known actress currently taking a break from industry work. Wanting to find out more about the mystery surrounding Mai (and maybe get a little closer to her in the process), Sakuta launches an investigation to figure out what\'s making this bunny girl invisible to everyone around them.',
            2020,
            2,
            'Romance',
            111.60)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781335897978',
            'Nora Roberts',
            'SILHOUETTE',
            'The MacGregor Brides',
            'A story about the MacGregor siblings who are stepping into their life as brides.',
            2016,
            9,
            'Romance',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780062425546',
            'Susan Wiggs',
            'HARPER COLLINS PUB. UK',
            'Between You and Me',
            'A girl tests the faithfullness of her lover in keeping a petty secret.',
            2018,
            2,
            'Romance',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781538737156',
            'Nicholas Sparks',
            'Grand Central Publishing',
            'The Return',
            'A man returns to his beloved after journeying around the world.',
            2014,
            9,
            'Romance',
            79.90)";
    $result = mysqli_query($connect,$query);

    //Self-Help
    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780061125898',
            'Robin S. Sharma',
            'HARPER US',
            'THE MONK WHO SOLD HIS FERRARI',
            'An internationally bestselling fable about a spiritual journey, littered with powerful life lessons that teach us how to abandon consumerism in order to embrace destiny, live life to the full and discover joy.',
            2014,
            8,
            'Self-Help',
            34.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781847391469',
            'Stephen R. Covey',
            'Simon & Schuster',
            'The 8th Habit: From Effectiveness to Greatness',
            'In the 7 Habits series, international bestselling author Stephen R. Covey showed us how to become as effective as it is possible to be. In his long-awaited new book, The 8th Habit, he opens up an entirely new dimension of human potential, and shows us how to achieve greatness in any position and any venue.',
            2019,
            1,
            'Self-Help',
            49.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781529391077',
            'Henrik Fexeus',
            'HODDER & STOUGHTON',
            'The Art of Reading Minds',
            'In this book, the author demonstrates how to understand other people and what they are thinking of, by observing their behaviour.',
            2020,
            12,
            'Self-Help',
            58.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781250624888',
            'Wallace Wattles',
            'Holtzbrinck',
            'The Science of Getting Rich',
            'Understand the mechanics and how the world acts in a way that a person could get riches.',
            2020,
            9,
            'Self-Help',
            54.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781935096351',
            'Jack Canfield',
            'Chicken Soup for the Soul',
            'Chicken Soup for the Soul: Tough Times, Tough People',
            'Tough times won\'t last, but tough people will. Many people have lost money and many are losing their jobs, homes, or at least making cutbacks. Many others have faced life-changing natural disasters, such as hurricanes and fires, as well as health and family difficulties Chicken Soup for the Soul: Tough Times, Tough People is all about overcoming adversity, pulling together, making do with less, facing challenges, and finding new joys in a simpler life.',
            2017,
            1,
            'Self-Help',
            59.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780671791544',
            'Anthony Robbins',
            'Simon & Schuster',
            'AWAKEN THE GIANT WITHIN',
            'The acknowledged expert in the psychology of change, Anthony Robbins provides a step-by-step program teaching the fundamental lessons of self-mastery that will enable you to discover your true purpose, take control of your life and harness the forces that shape your destiny.',
            2019,
            6,
            'Self-Help',
            59.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780062912893',
            'Jack Canfield',
            'HARPER COLLINS PUB. UK',
            'The Success Principles Workbook',
            'Jack Canfield shares tips and lifestyles of successful people.',
            2020,
            1,
            'Self-Help',
            109.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781785042416',
            'Napoleon Hill',
            'RANDOM HOUSE (UK)',
            'Think And Grow Rich',
            'This book provides tips on creating and maintaining sustainable wealth.',
            2015,
            5,
            'Self-Help',
            62.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781785042409',
            'Dale Carnegie',
            'RANDOM HOUSE (UK)',
            'How to Win Friends and Influence People',
            'Capture the interests of your freinds and other people with this book.',
            2013,
            10,
            'Self-Help',
            62.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780735278516',
            'Jordan Peterson',
            'RANDOM HOUSE (AUSTRALIA)',
            '12 Rules for Life: An Antidote to Chaos',
            'Follow Jordan Peterson as he guides readers on the dos and don\'ts of life',
            2020,
            8,
            'Self-Help',
            61.50)";
    $result = mysqli_query($connect,$query);

    //Thriller
    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241433577',
            'Alex Pavesi',
            'Penguin Books Ltd (GB)',
            'Eight Detectives',
            'Grant McAllister, an author of crime fiction and professor of mathematics, once sat down and worked them all out. But that was thirty years ago. Now he\'s living a life of seclusion on a quiet Mediterranean island - until Julia Hart, a sharp, ambitious editor, knocks on his door. His early work is being republished and together the two of them must revisit those old stories: an author, hiding from his past, and an editor, keen to understand it. But as she reads, Julia is unsettled to realise that there are things in the stories that don\'t make sense. Intricate clues that seem to reference a real murder, one that\'s remained unsolved for thirty years.',
            2020,
            2,
            'Thriller',
            75.50)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781529349900',
            'John Grisham',
            'HODDER & STOUGHTON',
            'Camino Winds',
            'The exceptional new thriller from bestselling author John Grisham.',
            2021,
            4,
            'Thriller',
            42.50)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781408821985',
            'Madeleine Miller',
            'Bloomsbury Publishing PLC',
            'Song of Achilles',
            'A breathtakingly original rendering of the Trojan War - a devastating love story and a tale of gods and kings, immortal fame and the human heart.',
            2012,
            1,
            'Thriller',
            58.64)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781409181637',
            'Alex Michaeliedes',
            'Orion Publishing Co (GB)',
            'Silent Patient',
            'With film rights snapped up by an Oscar winning Hollywood production company, rights sold in a world record 43 territories, and rave blurbs from David Baldacci, Lee Child and A.J. Finn, The Silent Patient is the international, multimillion-copy bestseller that you need to read this year.',
            2019,
            10,
            'Thriller',
            52.75)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241425442',
            'Richard Osman',
            'Penguin Books Ltd (GB)',
            'Thursday Murder Club',
            'In a peaceful retirement village, four unlikely friends meet up once a week to investigate unsolved murders. But when a brutal killing takes place on their very doorstep, the Thursday Murder Club find themselves in the middle of their first live case.',
            2020,
            4,
            'Thriller',
            81.89)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781472131942',
            'M.W. Craven',
            'Little, Brown Book Group (GB)',
            'Curator',
            'A dark and twisted crime novel, this is the eagerly anticipated follow up to The Puppet Show and Black Summer.',
            2020,
            6,
            'Thriller',
            45.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781787633629',
            'Lee Child',
            'Transworld (GB)',
            'The Sentinel',
            'No one\'s bigger than Jack Reacher. Jack Reacher gets off the bus in a sleepy no-name town outside Nashville, Tennessee. He plans to grab a cup of coffee and move right along. Not going to happen. The town has been shut down by a cyber attack. At the centre of it all, whether he likes it or not, is Rusty Rutherford. He is an average IT guy, but he knows more than he thinks',
            2020,
            5,
            'Thriller',
            73.91)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781529401424',
            'Romy Haussmann',
            'Quercus Publishing (GB)',
            'Dear Child',
            'Room meets Gone Girl in this page-turning thriller from one of Germany\'s hottest new talents.',
            2020,
            3,
            'Thriller',
            79.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781529039108',
            'Scott Turow',
            'Pan Macmillan (GB)',
            'Last Trial',
            'Sandy Stern takes on his last trial in this scintillating courtroom thriller.',
            2021,
            12,
            'Thriller',
            49.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorName, pubName, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781529342321',
            'John Grisham',
            'HODDER & STOUGHTON',
            'Time for Mercy',
            'The incredible new thriller from international bestseller John Grisham.',
            2020,
            5,
            'Thriller',
            89.21)";
    $result = mysqli_query($connect,$query);
    
    //Purchase table
    $query = "INSERT INTO Purchase (userEmail,ISBN,Date_Purchased,Total)
        VALUES(
            '1181101286@student.mmu.edu.my',
            '9780316552561',
            '2021-1-15',
            1)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Purchase (userEmail,ISBN,Date_Purchased,Total)
        VALUES(
            '1181101286@student.mmu.edu.my',
            '9780399579851',
            '2021-1-15',
            3)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Purchase (userEmail,ISBN,Date_Purchased,Total)
        VALUES(
            '1181101285@student.mmu.edu.my',
            '9780399579851',
            '2021-1-15',
            2)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Purchase (userEmail,ISBN,Date_Purchased,Total)
        VALUES(
            '1181102427@student.mmu.edu.my',
            '9781632367747',
            '2021-1-15',
            2)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Purchase (userEmail,ISBN,Date_Purchased,Total)
        VALUES(
            '1181101444@student.mmu.edu.my',
            '9781846045714',
            '2021-1-15',
            2)";
    $result = mysqli_query($connect,$query);

    //Rating table
    $query = "INSERT INTO Rating (userEmail,ISBN,Rating)
        VALUES(
            '1181101286@student.mmu.edu.my',
            '9780316552561',
            5)";
    $result = mysqli_query($connect,$query);
?>