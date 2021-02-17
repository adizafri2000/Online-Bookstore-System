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
            9789814828604,
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
            9789674151850,
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
            9789814779814,
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
            9780600623595,
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
            9780399579851,
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
            9780393089042,
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
            9780241455159,
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
            9780241431153,
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
            9781607742739,
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
            9780241453124,
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
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Fantasy',
            )";
    $result = mysqli_query($connect,$query);

    //Health
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Health',
            )";
    $result = mysqli_query($connect,$query);

    //Horror
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Horror',
            )";
    $result = mysqli_query($connect,$query);

    //Romance
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
            '',
            '',
            '',
            '',
            ,
            ,
            'Romance',
            )";
    $result = mysqli_query($connect,$query);

    //Self-Help
    $query = "INSERT INTO Book (ISBN, authorID, pubID, bookName, Summary, Year_Published, Stock, Genre, Price) 
        VALUES(
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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
            ,
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