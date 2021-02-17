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

    //Author insertion
    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000001',
            'J.K Rowling')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000002',
            'Natsume Akatsuki')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000003',
            'Tappei Nagatsuki')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000004',
            'Stephen King')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000005',
            'Eoin Coffer')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000006',
            'Katie Tsang')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000007',
            'Harrison Michelle')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000008',
            'Sophie Anderson')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000009',
            'Negi Haruba')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000010',
            'Reiji Miyajima')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000011',
            'Susan Mallery')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000012',
            'Hajime Kamoshida')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000013',
            'Nora Roberts')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000014',
            'Susan Wiggs')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000015',
            'Nicholas Sparks')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000016',
            'Tan Phay Shing')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000017',
            'Goo Chui Hoong')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000018',
            'Chef Wan')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000019',
            'Emma Jane Frost')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000020',
            'James Oseland')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000021',
            'Fuchsia Dunlop')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000022',
            'Rebecca Wilson')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000023',
            'Jamie Oliver')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000024',
            'Ken Forkish')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000025',
            'Meal Prep King')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000026',
            'Gan Siew Hua')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000027',
            'Michael Greger')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000028',
            'PAN MACMILLAN')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000029',
            'David Wolfe')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000030',
            'Deepak Chopra')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000031',
            'Luigi Fontana')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000032',
            'Bessel van der Kolk')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000033',
            'Kiki Ely')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000034',
            'Neal's Yard Remedies')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000035',
            'Lilin Yang')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000036',
            'Jason Fung')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000037',
            'James Lee')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000038',
            'Russell Lee')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000039',
            'Alexis Henderson')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000040',
            'Darcy Coates')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000041',
            'Stephen Graham Jones')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000042',
            'Robin S. Sharma')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000043',
            'Stephen R. Covey')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000044',
            'Henrik Fexeus')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000045',
            'Wallace Wattles')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000046',
            'Jack Canfield')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000047',
            'Anthony Robbins')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000048',
            'Napoleon Hill')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000049',
            'Dale Carnegie')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000050',
            'Jordan Peterson')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000051',
            'John Grisham')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000052',
            'Madeleine Miller')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000053',
            'Alex Michaeliedes')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000054',
            'Richard Osman')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000055',
            'M.W. Craven')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000056',
            'Lee Child')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000057',
            'Romy Haussmann')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000058',
            'Scott Turow')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Author (authorID, authorName) 
        VALUES(
            'A000000059',
            'Alex Pavesi')";
    $result = mysqli_query($connect,$query);

    //Publisher insertion
    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000001',
            'Bloomsbury Publishing PLC')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000002',
            'Yen Pr (US)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000003',
            'HODDER & STOUGHTON')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000004',
            'QUERCUS')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000005',
            'Simon & Schuster')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000006',
            'POCKET')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000007',
            'Usborne Publishing Ltd')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000008',
            'Kodansha Comics (US)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000009',
            'HARLEQUIN BOOKS')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000010',
            'SILHOUETTE')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000011',
            'HARPER COLLINS PUB. UK')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000012',
            'Grand Central Publishing')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000013',
            'MARSHALL CAVENDISH')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000014',
            'MPH Publishing')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000015',
            'Hamlyn')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000016',
            'Ten Speed Pr (US)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000017',
            'W W Norton & Co Inc (US)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000018',
            'Dk Pub (GB)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000019',
            'Penguin Books Ltd (GB)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000020',
            'RANDOM HOUSE (UK)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000021',
            'Hardie Grant Books (US)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000022',
            'Chartwell Books (US)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000023',
            'Cassell (US)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000024',
            'Thorsons (GB)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000025',
            'Angsana Books')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000026',
            'Transworld (GB)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000027',
            'Poisoned Pen Pr (US)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000028',
            'Titan Books Ltd (GB)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000029',
            'HARPER US')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000030',
            'Holtzbrinck')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000031',
            'Chicken Soup for the Soul')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000032',
            'RANDOM HOUSE (AUSTRALIA)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000033',
            'Orion Publishing Co (GB)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000034',
            'Little, Brown Book Group (GB)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000035',
            ' Quercus Publishing (GB)')";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Publisher (pubID, pubName) 
        VALUES(
            'P000000036',
            'Pan Macmillan (GB)')";
    $result = mysqli_query($connect,$query);

    //Book insertion

    
    //Cooking
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789814828604',
            'A000000016',
            'P000000013',
            'Creative Baking: Macaron Basics (Creative Baking Series)',
            'Creative Baking: Macaron Basics is a companion title to Phay Shing\'s first title, Creative Baking: Macaron, and is a guide to mastering the basic techniques of making decorated macarons.',
            2019,
            5,
            'Cooking',
            69.90)";
    $result = mysqli_query($connect,$query);

    
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789674151850',
            'A000000017',
            'P000000014',
            'Goo Chui Hoong\'s Lite Malaysian Favourites (MPH Masterclass Series)',
            'Lite Malaysian Favourites shows how easy it is to eat healthily. Some of the recipes in this book are dishes commonly found at hawker stalls or restaurants which have been given a twist to make them healthier.',
            2014,
            1,
            'Cooking',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789814779814',
            'A000000018',
            'P000000013',
            'The Best of Chef Wan: A Taste of Malaysia (Volume 1)',
            'Malaysia\'s Culinary Ambassador and Asia\'s most notable chef, Chef Wan shares more than 60 of his favourite Asian recipes in his book, The Best of Chef Wan Volume 1.',
            2007,
            7,
            'Cooking',
            59.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780600623595',
            'A000000019',
            'P000000015',
            'Hamlyn QuickCook: Family Meals',
            'Family Meals offers the perfect alternative to dinner in front of the TV by showing you how to use limited ingredients, simple methods and minimal time to create delicious and healthy family meals.',
            2013,
            2,
            'Cooking',
            25.00)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780399579851',
            'A000000020',
            'P000000016',
            'World Food Mexico City : Heritage Recipes for Classic Home Cooking',
            '75 recipes, evocative storytelling, and beautiful photography provide a lens into one of the planet\'s most interesting culinary destinations: Mexico City',
            2020,
            9,
            'Cooking',
            119.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780393089042',
            'A000000021',
            'P000000017',
            'Every Grain of Rice : Simple Chinese Home Cooking',
            'A culinary reference features southern Chinese recipes, shares a comprehensive introduction to key seasonings and techniques, and offers such options as smoky eggplant with garlic, twice-cooked pork, and emergency midnight noodles.',
            2013,
            11,
            'Cooking',
            185.42)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241455159',
            'A000000022',
            'P000000018',
            'What Mummy Makes : Cook Just Once for You and Your Baby',
            'SUNDAY TIMES BESTSELLER Wordery's Book of The Year 2020: Food and Drink - WINNER 130+ recipes all suitable from 6 months old Wean your baby and feed your family at the same time by cooking just one meal in under 30 minutes that everyone will enjoy! Say goodbye to cooking multiple meals every day and the faff of making special little spoonfuls for your baby, plainer dishes for fussy older siblings, and something different again for the grown-ups.',
            2020,
            5,
            'Cooking',
            86.95)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241431153',
            'A000000023',
            'P000000019',
            '7 Ways : Easy Ideas for Every Day of the Week',
            'Make everyday meals more exciting with the brand-new No. 1 bestselling cookbook, featuring 120 exciting and tasty new recipes, including recipes from Jamie's hit Channel 4 TV show Keep Cooking Family Favourites',
            2020,
            7,
            'Cooking',
            150.95)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781607742739',
            'A000000024',
            'P000000016',
            'Flour Water Salt Yeast : The Fundamentals of Artisan Bread and Pizza',
            'In Flour Water Salt Yeast, author Ken Forkish demonstrates that high-quality artisan bread and pizza is within the reach of any home baker. Whether it\'s a basic straight dough, dough made with a pre-ferment, or complex levain, each of Forkish\'s impeccable recipes yields exceptional results.',
            2012,
            9,
            'Cooking',
            159.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241453124',
            'A000000025',
            'P000000019',
            'Meal Prep King Plan : Save time. Lose weight. Eat the meals you love',
            'Lose weight for good with great-tasting, easy-to-cook recipes from The Meal Prep King Plan Together, John and Charlotte have lost an incredible 15-stone, and they are here to show you how to lose weight and feel your best - the easy way.',
            2020,
            8,
            'Cooking',
            116.00)";
    $result = mysqli_query($connect,$query);

    //Fantasy
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781408855690',
            'A000000001',
            'P000000001',
            'Harry Potter and the Order of the Phoenix',
            'Dark times have come to Hogwarts. After the Dementors\' attack on his cousin Dudley, Harry Potter knows that Voldemort will stop at nothing to find him. There are many who deny the Dark Lord\'s return, but Harry is not alone: a secret order gathers at Grimmauld Place to fight against the Dark forces. Harry must allow Professor Snape to teach him how to protect himself from Voldemort\'s savage assaults on his mind. But they are growing stronger by the day and Harry is running out of time.',
            2004,
            12,
            'Fantasy',
            59.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781408855713',
            'A000000001',
            'P000000001',
            'HARRY POTTER AND THE DEATHLY HALLOWS',
            'As he climbs into the sidecar of Hagrid\'s motorbike and takes to the skies, leaving Privet Drive for the last time, Harry Potter knows that Lord Voldemort and the Death Eaters are not far behind. The protective charm that has kept Harry safe until now is now broken, but he cannot keep hiding. The Dark Lord is breathing fear into everything Harry loves, and to stop him Harry will have to find and destroy the remaining Horcruxes. The final battle must begin – Harry must stand and face his enemy.',
            2008,
            1,
            'Fantasy',
            59.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780316552561',
            'A000000002',
            'P000000002',
            'Konosuba God\'s Blessing on This Wonderful World! 1',
            'Kazuma Sato is a video game-loving shut-in-or at least he was, until a humiliating traffic accident brings his young life to an untimely end. But after his death, a beautiful girl claiming to be a goddess invites him to enter another world and gain some respectable perks in the process. But Kazuma\'s choice is going to have serious consequences for the goddess and the dead man alike...',
            2016,
            5,
            'Fantasy',
            60.45)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781975320287',
            'A000000003',
            'P000000002',
            'Re Zero Starting Life in Another World 1 : The Sanctuary and the Witch of Greed',
            'After the battle against the Witch Cult\'s Archbishop of Sloth, Subaru is set to reunite with Emilia, but new trials and tribulations await. As another chapter unfolds, Subaru heads toward the holy territory of the Witch.',
            2021,
            8,
            'Fantasy',
            61.49)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781529308419',
            'A000000004',
            'P000000003',
            'Elevation',
            'Although Scott Carey doesn\'t look any different, he\'s been steadily losing weight. There are a couple of other odd things, too. He weighs the same in his clothes and out of them, no matter how heavy they are. Scott doesn’t want to be poked and prodded. He mostly just wants someone else to know, and he trusts Doctor Bob Ellis.',
            2000,
            7,
            'Fantasy',
            42.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781529402025',
            'A000000005',
            'P000000004',
            'Highfire',
            'Indulge in this tale of fiery fire and dragons.',
            2010,
            10,
            'Fantasy',
            79.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781471193071',
            'A000000006',
            'P000000005',
            'DRAGON REALM 01 : DRAGON MOUNTAIN',
            'A group of youngsters team up to battle dragons that reside next to their village.',
            2011,
            4,
            'Fantasy',
            49.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781416524526',
            'A000000004',
            'P000000006',
            'The Dark Tower',
            'A much-anticipated final installment in the epic series that began thirty-three years ago with The Gunslinger completes the quest of Roland Deschain, who works to outmaneuver the increasingly desperate acts of his adversaries and confronts losses within his circle of companions.',
            2016,
            3,
            'Fantasy',
            44.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781471183867',
            'A000000007',
            'P000000005',
            'A Sprinkle of Sorcery',
            'Three wizards take journey across the sea.',
            2009,
            1,
            'Fantasy',
            49.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781474978491',
            'A000000008',
            'P000000007',
            'The Castle of Tangled Magic',
            'A teenage girl mysteriously finds a castle behinds her house and explores it.',
            2014,
            8,
            'Fantasy',
            44.90)";
    $result = mysqli_query($connect,$query);

    //Health
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789674154400',
            'A000000026',
            'P000000014',
            'TIPS ON USING COMMON MEDICINES SAFELY',
            'Written in an easily understood Q&A format, TIPS ON USING COMMON MEDICINES SAFELY provides information on how to maximise the use of common medicines while minimising the impact of their side effects. It also gives concise information on how to avoid harmful interactions with other drugs, food, herbs and vitamins.',
            2015,
            8,
            'Health',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781509852505',
            'A000000027',
            'P000000036',
            'HOW NOT TO DIE (UK)',
            'Teaches you literally to not die. Enjoy life with our various tips provided.',
            2020,
            1,
            'Health',
            64.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780062309815',
            'A000000029',
            'P000000011',
            'The Beauty Diet',
            'This book guides you on how to stay on a diet while maintaining your beauty.',
            2020,
            7,
            'Health',
            86.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781846045714',
            'A000000030',
            'P000000020',
            'THE HEALING SELF',
            'Guides readers on healing themselves with the help of nature and environment.',
            2011,
            9,
            'Health',
            42.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781743795965',
            'A000000031',
            'P000000021',
            'The Path to Longevity : How to Reach 100 with the Health and Stamina of a 40-Year-Old',
            'The Path to Longevity is a roadmap to living a long, healthy life. In it, Dr Luigi Fontana, Professor of Medicine and Nutritional Science, summarises more than 20 years of research on preventative medicine, clinical practice, and his accumulated knowledge on healthy longevity, using an evidence-based approach.',
            2020,
            1,
            'Health',
            106.35)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780141978611',
            'A000000032',
            'P000000019',
            'The Body Keeps the Score: Mind, Brain and Body in the Transformation of Trauma',
            'What causes people to continually relive what they most want to forget, and what treatments could help restore them to a life with purpose and joy? Here, Dr Bessel van der Kolk offers a new paradigm for effectively treating traumatic stress.',
            2015,
            9,
            'Health',
            63.95)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780785838302',
            'A000000033',
            'P000000022',
            'The Complete Guide to Self Care : Best Practices for a Healthier and Happier You',
            'Self-care is far from selfish. Learn lots of new mantras, tips, tricks, and crafts to help balance out all the moving parts in your life with The Complete Guide to Self-Care.',
            2020,
            7,
            'Health',
            85.14)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780241426289',
            'A000000034',
            'P000000018',
            'Neal\'s Yard Remedies Healing Herbs: Treat Yourself Naturally with Homemade Herbal Remedies',
            'Find your route to natural wellness with Neal\'s Yard Remedies\' expert guide to using medicinal herbs. Neal\'s Yard Remedies Healing Herbs offers expert advice and know-how you can trust in this detailed guide, which features an illustrated directory of 100 key herbs, including hemp, lavender, thyme, aloe vera, and lemongrass.',
            2020,
            11,
            'Health',
            110.50)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781788401661',
            'A000000035',
            'P000000023',
            'The Korean Skincare Bible : The Ultimate Guide to K-Beauty Secrets',
            'The Korean Skincare Bible is your expert guide to achieving radiant, flawless skin, every day.',
            2019,
            3,
            'Health',
            55.00)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780008436209',
            'A000000036',
            'P000000024',
            'The Cancer Code: A Revolutionary New Understanding of a Medical Mystery',
            'Our understanding of cancer is slowly undergoing a revolution, allowing for the development of more effective treatments. For the first time ever, the death rate from cancer is showing a steady decline ... but the \'War on Cancer\' has hardly been won.',
            2020,
            1,
            'Health',
            91.74)";
    $result = mysqli_query($connect,$query);

    //Horror
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789814315715',
            'A000000037',
            'P000000025',
            'MR. MIDNIGHT 91: RUN! ITS THE RUBBER MAN!',
            'The Rubber Man wanders the school compound at night to prey on children.',
            2019,
            6,
            'Horror',
            12.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789814315708',
            'A000000037',
            'P000000025',
            'MR. MIDNIGHT 90: RIVERBOAT GHOSTS',
            'Wanna go on a tour on the riverboat? Sure, just make sure your bringing blessings to shoo the white beings away.',
            2019,
            5,
            'Horror',
            12.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789810013462',
            'A000000038',
            'P000000025',
            'True Singapore Ghost Stories 01',
            'Real-life stories of encounters with the paranormal beings.',
            2006,
            1,
            'Horror',
            19.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9789810025298',
            'A000000038',
            'P000000025',
            'True Singapore Ghost Stories 02',
            'Real-life stories of encounters with the paranormal beings.',
            2006,
            6,
            'Horror',
            19.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781444783247',
            'A000000004',
            'P000000003',
            'Doctor Sleep',
            'King says he wanted to know what happened to Danny Torrance, the boy at the heart of The Shining, after his terrible experience in the Overlook Hotel. The instantly riveting Doctor Sleep picks up the story of the now middle-aged Dan, working at a hospice in rural New Hampshire, and the very special twelve-year old girl he must save from a tribe of murderous paranormals.',
            2013,
            8,
            'Horror',
            31.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781501121173',
            'A000000004',
            'P000000005',
            'Revival',
            'A spectacularly dark and electrifying novel about addiction, religion, music and what might exist on the other side of life.',
            2011,
            2,
            'Horror',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781982114312',
            'A000000004',
            'P000000005',
            'The Outsider',
            'What would you do if an outsider trespasses your private residence and hunts you?',
            2009,
            7,
            'Horror',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781787632530',
            'A000000039',
            'P000000026',
            'Year of the Witching',
            'In the lands of Bethel, where the Prophet\'s word is law, Immanuelle Moore\s very existence is blasphemy. The daughter of a union with an outsider that cast her once-proud family into disgrace, Immanuelle does her best to worship the Father, follow Holy Protocol and lead a life of submission, devotion and absolute conformity, like all the women in the settlement. But a chance mishap lures her into the forbidden Darkwood that surrounds Bethel - a place where the first prophet once pursued and killed four powerful witches. Their spirits are still walking there, and they bestow a gift on Immanuelle: the diary of her dead mother, who Immanuelle is shocked to learn once sought sanctuary in the wood.',
            2020,
            9,
            'Horror',
            79.95)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781728220147',
            'A000000040',
            'P000000027',
            'The Haunting of Blackwood House',
            'With a childhood filled with seances and scam mediums, Mara, the daughter of spiritualists, finds her beliefs questioned when she and her fiance buy Blackwood House, a derelict property rumored to be haunted.',
            2020,
            9,
            'Horror',
            70.50)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781789095296',
            'A000000041',
            'P000000028',
            'Only Good Indians',
            'Adam Nevill\'s The Ritual meets Liane Moriarty\'s Big Little Lies in this atmospheric gothic literary horror.',
            2020,
            1,
            'Horror',
            52.75)";
    $result = mysqli_query($connect,$query);

    //Romance
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632367747',
            'A000000009',
            'P000000008',
            'The Quintessential Quintuplets 1',
            'Futaro Uesugi is a second-year in high school, scraping to get by and pay off his family\'s debt. The only thing he can do is study, so when Futaro receives a part-time job offer to tutor the five daughters of a wealthy businessman, he can\'t pass it up. Little does he know, these five beautiful sisters are quintuplets, but the only thing they have in common is that they\'re all terrible at studying! At this rate, the sisters can\'t graduate, and Futaro must think of a plan that suits each of them - which feels hopeless when five-out-of-five of these girls think he\'s a loser!',
            2019,
            3,
            'Romance',
            49.89)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632369970',
            'A000000010',
            'P000000008',
            'Rent-a-Girlfriend 1',
            'You can rent a girlfriend, but can you buy love? Hapless freshman Kazuya, reeling from a bad breakup, buys a few hours at the aquarium with the beautiful, polite Chizuru. But rock bottom might be so much lower than he thought! Family, school, and life all start to go wrong, and to make matters worse, Chizuru is much more than the pretty face and sweet demeanor he thought he had bargained for!',
            2020,
            7,
            'Romance',
            58.97)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781335474605',
            'A000000011',
            'P000000009',
            'WHY NOT TONIGHT',
            'A romantic tale of a newlywed couple whom try new things as a pair.',
            2009,
            1,
            'Romance',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632367754',
            'A000000009',
            'P000000008',
            'The Quintessential Quintuplets 2',
            'Futaro Uesugi is a second-year in high school, scraping to get by and pay off his family\'s debt. The only thing he can do is study, so when Futaro receives a part-time job offer to tutor the five daughters of a wealthy businessman, he can\'t pass it up. Little does he know, these five beautiful sisters are quintuplets, but the only thing they have in common is that they\'re all terrible at studying! At this rate, the sisters can\'t graduate, and Futaro must think of a plan that suits each of them - which feels hopeless when five-out-of-five of these girls think he\'s a loser!',
            2019,
            6,
            'Romance',
            49.89)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632367761',
            'A000000009',
            'P000000008',
            'The Quintessential Quintuplets 3',
            'Futaro Uesugi is a second-year in high school, scraping to get by and pay off his family\'s debt. The only thing he can do is study, so when Futaro receives a part-time job offer to tutor the five daughters of a wealthy businessman, he can\'t pass it up. Little does he know, these five beautiful sisters are quintuplets, but the only thing they have in common is that they\'re all terrible at studying! At this rate, the sisters can\'t graduate, and Futaro must think of a plan that suits each of them - which feels hopeless when five-out-of-five of these girls think he\'s a loser!',
            2019,
            1,
            'Romance',
            49.89)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781632369987',
            'A000000010',
            'P000000008',
            'Rent-a-Girlfriend 2',
            'You can rent a girlfriend, but can you buy love? Hapless freshman Kazuya, reeling from a bad breakup, buys a few hours at the aquarium with the beautiful, polite Chizuru. But rock bottom might be so much lower than he thought! Family, school, and life all start to go wrong, and to make matters worse, Chizuru is much more than the pretty face and sweet demeanor he thought he had bargained for!',
            2020,
            2,
            'Romance',
            58.97)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781975359621',
            'A000000012',
            'P000000002',
            'Rascal Does Not Dream of Bunny Girl Senpai 1',
            'Bunny girls do not live in libraries. This is simply common sense. And yet, that\'s exactly where Sakuta runs into one in the wild. More bewildering is who the bunny girl is: Mai Sakurajima, an upperclassman and well-known actress currently taking a break from industry work. Wanting to find out more about the mystery surrounding Mai (and maybe get a little closer to her in the process), Sakuta launches an investigation to figure out what\'s making this bunny girl invisible to everyone around them.',
            2020,
            2,
            'Romance',
            111.60)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781335897978',
            'A000000013',
            'P000000010',
            'The MacGregor Brides',
            'A story about the MacGregor siblings who are stepping into their life as brides.',
            2016,
            9,
            'Romance',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9780062425546',
            'A000000014',
            'P000000011',
            'Between You and Me',
            'A girl tests the faithfullness of her lover in keeping a petty secret.',
            2018,
            2,
            'Romance',
            39.90)";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '9781538737156',
            'A000000015',
            'P000000012',
            'The Return',
            'A man returns to his beloved after journeying around the world.',
            2014,
            9,
            'Romance',
            79.90)";
    $result = mysqli_query($connect,$query);

    //Self-Help
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Self-Help',
            )";
    $result = mysqli_query($connect,$query);

    //Thriller
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            '',
            '',
            '',
            '',
            '',
            ,
            ,
            'Thriller',
            )";
    $result = mysqli_query($connect,$query);
    
?>