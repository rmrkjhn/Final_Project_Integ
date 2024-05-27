<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/main.css"> 
    <title>Educational</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: green;
            display: flex;
        }

        aside {
            width: 250px;
            height: 100vh;
            background-color: green;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        aside header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

        header .profile-logo {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 2px solid #ddd;
            margin-bottom: 10px;
        }
        
        header h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: 800;
            color: white;
            margin: 0;
            text-align: center;
        }

        nav.left-side-bar {
            width: 100%;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        nav.left-side-bar a {
            color: white;
            text-decoration: none;
            padding: 10px 10px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
            width: 100%;
            text-align: center;
            border-radius: 5px;
            
        }

        nav.left-side-bar a:hover {
            background-color: yellowgreen;
        }

        section {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 20px;
            box-sizing: border-box;
            background-color: lightgoldenrodyellow;
            min-height: 100vh;
            overflow-y: auto;
        }

        .content-section {
            margin-bottom: 40px;
        }

        .content-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .small-images {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .small-image {
            width: 30%;
            text-align: center;
            margin-bottom: 20px;
        }

        .small-image img {
            width: 100%;
            height: 200px;
        }

        .small-image p {
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }

        h2 {
            font-family: serif;
        }
        p{
            font-family: serif;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <aside>
        <?php include_once('components/header.php'); ?> <br>
        <nav class="left-side-bar">
            <a href="index.php">Home</a><br>
            <a href="#understanding">Understanding Marinduque</a><br>
            <br>
            <a href="#sustainable">Sustainable Practices</a><br>
            <br>
            <a href="#engagement">Community Engagement</a><br>
            <br>
            <a href="#resources">Resources</a>
        </nav>
    </aside>
    <section>
        <div id="understanding" class="content-section">
            <h2>Understanding Marinduque</h2>
            <div class="small-images">
                <div class="small-image">
                    <img src="eduimgs/understanding1.jpg" alt="Small Image 1">
                    <p><strong>Water Pollution:</strong> For decades, Placer Dome operated two mines 
                    in the Province of Marinduque, during which time it intentionally
                    dumped hundreds of millions of tons of toxic mine waste into 
                    traditional fishing areas, and catastrophic dam failures flooded 
                    rivers with toxic mine waste.</p>
                </div>
                <div class="small-image">
                    <img src="eduimgs/understanding2.jpg" alt="Small Image 2">
                    <p><strong>Improper waste disposal:</strong> is caused by various factors such as lack of
                    knowledge on waste segregation, social problems associated with waste
                    management, improper waste disposal attitudes of residents, lack of proper
                    planning and funding for waste management, and negligence in waste 
                    management sector.</p>
                </div>
                <div class="small-image">
                    <img src="eduimgs/unterstanding3.jpg" alt="Small Image 3">
                    <p><strong>Gold mining:</strong> The Marinduque Mines operated by Marcopper dumped waste into
                    the shallow bay of Calancan for 16 years, totaling 200 million tons of 
                    toxic tailings. When exposed to ocean breezes, the tailings, which partially
                    floated, become airborne and landed on rice fields, in open water wells,
                    and on village homes.</p>
                </div>
            </div>
        </div>

        <div id="sustainable" class="content-section">
            <h2>Sustainable Practices</h2>
            <div class="small-images">
                <div class="small-image">
                    <img src="eduimgs/sustainable1.png" alt="sus-image1">
                    <p>A Vision for Marinduque - ARGEA The Filipino people are
                    proud, and the inhabitants of Marinduque are no exception. Some of 
                    them saw the potential of their island and the potential danger of 
                    irresponsible exploitation. That’s why there is growing incentives
                    to follow a common sustainable vision. One of these organizations 
                    and a promising one is AGREA. They act as teachers, researchers, 
                    and guides to make life easier for farmers and they assure the island
                    to be more independent and their exploitation smarter. I volunteered
                    and worked as a farmer on an experimental farm with their 
                    team and I learned quite a lot.</p>
                </div>
                <div class="small-image">
                    <img src="eduimgs/sustainable2.png" alt="sus-image2">
                    <p>Butterfly Farming in Marinduque Butterfly farming is one of the major 
                    industries in Mariduque, with Gasan gaining the accolade as the 
                    “Butterfly Capital of the Philippines.” Through the kind assistance 
                    of our Governor Carmencita O. Reyes, the 150 butterfly breeders in 
                    our town were given nets and larvae cages to support their production. 
                    This help from our provincial government is instrumental in making 
                    Gasan butterfly breeders the top supplier of pupae and live 
                    butterflies in Marinduque.</p>
                </div>
                <div class="small-image">
                    <img src="eduimgs/sustainable3.png" alt="sus-image3">
                    <p>Indigenous small-scale enterprises in Marinduque The province of
                    Marinduque has two peculiar characteristics-- it is situated at
                    the geographical center of the Philippines and the Marinduque 
                    province is heart-shaped. Thus, it is considered the heart 
                    of the Philippine archipelago.</p>
                </div>
            </div>
        </div>

        <div id="engagement" class="content-section">
            <h2>Community Engagement</h2>
            <div class="small-images">
                <div class="small-image">
                    <img src="eduimgs/engagement1.jpg" alt="edu-image1">
                    <p>MSC hugs Mother Nature for a sustainable future. Mogpog, Marinduque,
                    Philippines – MSC, being an advocate of environmental protection 
                    and sustainable development conducted tree planting and tree-hugging 
                    at MSC Mogpog Extramural Study Center, Capayang, Mogpog on February 23, 2024. 
                    The activity started with an opening message from Mr. Arnel M. Lantita 
                    who expressed his delight to the attendees who are continuously supporting
                    different activities of the college as part of MSC’s advocacy on 
                    environmental preservation and protection.</p>
                </div>
                <div class="small-image">
                    <img src="eduimgs/engagement2.jpg" alt="edu-image2">
                    <p>NU Alumni Affairs Office held a three-day activity in Marinduque The National
                    University Alumni Affairs Office (NUAAO) held a three-day activity in
                    Marinduque from April 21 to 23, 2023, in collaboration with the NU Alumni 
                    Marinduque Chapter. The successful three-day activity of Homecoming, Sports
                    Clinic, and Community Engagement also composed of teams from NU: AADO, and NUAFI. </p>
                </div>
                <div class="small-image">
                    <img src="eduimgs/engagement3.jpg" alt="edu-image3">
                    <p>Nonprofit group brings back in person community engagement. The community 
                    outreach program gathers volunteers together to facilitate values formation
                    activities and engage school children ages 10-12 with games, team-building,
                    storytelling, and workshops. These activities are designed to promote positive
                    Filipino traits, inspiring them to see themselves as dreamers and 
                    future leaders with a heart for service.</p>
                </div>
            </div>
        </div>

        <div id="resources" class="content-section">
            <h2>Resources and References</h2>
            <div class="small-images">
                <div class="small-image">
                    <video width="300" height="240" controls>
                        <source src="vid/wastemanagement.mp4" type="video/mp4">
                    </video>
                    <p>Waste Management</p>
                </div>
                <div class="small-image">
                    <video width="300" height="240" controls>
                        <source src="vid/sustainable.mp4" type="video/mp4">
                    </video>
                     <p>Sustainable Practices</p>
                </div>
                <div class="small-image">
                    <video width="300" height="240" controls>
                        <source src="vid/community.mp4" type="video/mp4">
                    </video>
                    <p>Community Engagement</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
