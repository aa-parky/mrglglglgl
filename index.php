<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title for the webpage -->
    <title>Mrmglglglgl Read it Before you are in it</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Importing html2canvas library to capture page content as comic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
    <!-- Speech bubbles with content fetched using a PHP script -->
    <?php include 'scripts/parse_collected_entries.php'; ?>
    <!-- Slug-line generated using a PHP script -->
    <?php include 'scripts/slug-line.php'; ?>
    <!-- Date & Time -->
    <?php include 'scripts/utc.php'; ?>
    <!-- Sub-headline generated using a PHP script -->
    <?php include 'scripts/top-caption.php'; ?>
    <!-- Sub-headline generated using a PHP script -->
    <?php include 'scripts/bottom-caption.php'; ?>
    <!-- Sub-headline generated using a PHP script -->
    <?php include 'scripts/murlocs-charge.php'; ?>
    <!-- Auction Items -->
    <?php include 'scripts/btc.php'; ?>
    <!-- Ticker script -->
    <?php include 'scripts/ticker.php'; ?>
    <!-- Death Tally script -->
    <?php include 'scripts/death-tally.php' ?>

    <!-- Adobe fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/tkq4iko.css">
    <!-- Link to the site's stylesheets -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/ticker.css">
    <link rel="stylesheet" href="css/speech-bubbles.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Speech bubbles font scaling script-->
    <script type="text/javascript" src="scripts/speech-bubble.js"></script>
    <!-- Ticker scrolling script-->
    <script type="text/javascript" src="scripts/news_ticker.js"></script>
    <!-- Ticker simulate typewriter effect script-->
    <script type="text/javascript" src="scripts/typewriter_text.js"></script>

</head>

<body>

    <div class="container">

        <!-- Header -->
        <div class="header-left">
            <div id="header-left-flex">
                <div id="flex-header-news">All the Hardcore</div>
                <div id="news_popout">News*!*</div>
            </div>
        </div>
        <div class="header-center">
            <div id="header-center-flex">
                <div id="flex-header-sub">
                    <?php echo generateSlugLine(); ?>
                </div>
                <div id="news-ticker" aria-hidden="true">
                    <p>
                        <span id="typewriter-text">
                            <?php foreach ($players as $player) : ?>
                                <?= $player['name'] ?> &nbsp; the &nbsp;<?= $player['race'] ?> &nbsp; <?= $player['class'] ?> &nbsp; @ &nbsp; <?= $player['level'] ?>,&nbsp;
                            <?php endforeach; ?>
                        </span>
                    </p>
                </div>
            </div>

        </div>
        <div class="header-right">
            <div id="flex-header-right">
                <div id="flex-header-mrgl">mrglglgl</div>
                <div id="flex-header-issue">Issue #
                    <?php echo $formattedDate; ?>
                </div>
            </div>
        </div>
        <!-- END Header -->

        <!-- Slugline Top Captions and Alliance dead -->
        <div class="slug-topcap-ali">
            <div id="flex-sta">
                <div id="slugline">Suddenly...</div>
                <div id="top-caption">
                    ...<?php echo generateSubHeadline(); ?>
                </div>
                <div id="ali-roll">
                    <div id="ali-header">
                        Alliance deaths ...
                    </div>
                    <div id="ali-list">
                        <p>Landlocked Lollygaggers: <?php echo $human_deaths; ?></p>
                        <p>Stout-gut Stumblestones: <?php echo $dwarf_deaths; ?></p>
                        <p>Moonbeam Treehuggers: <?php echo $night_elf_deaths; ?></p>
                        <p>Pint-sized Puffnuggets: <?php echo $gnome_deaths; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Slugline Top Captions and Alliance dead -->

        <!-- MOB Stack -->
        <div class="mobspk-mobpic-mobchg">
            <div id="flex-mob">
                <div id="bubble-mob-scale" class="bubble-mob">
                    <span class="span-php"><?php echo $name; ?></span> *!* mrglglgl
                </div>
                <div id="mob-pic">
                    <img src="img/zMrGl-02.png" alt="Mr.Gl">
                </div>
                <div id="bubble-chg-scale" class="bubble-chg">
                    <?php echo generateMurlocsChg(); ?>
                </div>
            </div>
        </div>
        <!-- END MOB Stack -->

        <!-- Player Stack -->
        <div class="playerspk-playerpic-botcap">
            <div id="flex-player">
                <div id="bubble-right-scale" class="bubble-player">
                    <?php echo $lastWords; ?>
                </div>
                <div id="player-pic">
                    <?php $image_file_name = "img/" . $race_id . ".png"; ?>
                    <img src="<?php echo $image_file_name; ?>" alt="<?php echo $race_id; ?>">
                </div>
                <div id="bottom-caption">
                    <?php echo generateMurlocEndings(); ?>
                </div>
            </div>
        </div>
        <!-- END Player Stack -->

        <!-- Auctioneer Picture -->
        <div class="aucpic">
            <div id="auction-pic">
                <img src="img/zAuc-01.png" alt="a Goblin Auctioneer">
            </div>
        </div>
        <!-- END Auctioneer Picture -->

        <!-- Auctioneer Speech -->
        <div class="auc-spk">
            <div id="bubble-auc-scale" class="bubble-auc">
                <span class="span-php"><?php echo $name; ?>'s loot !</span> <?php echo generateBTCauctions(); ?>
            </div>
        </div>
        <!-- END Auctioneer Speech -->

        <!-- Obit Section -->
        <div class="obit">
            <div id="obit-php">
                <?php echo $player_obit; ?>
            </div>
        </div>
        <!-- END Obit Section -->

        <!-- Horde left list-->
        <div class="horde-left">
            <div id="horde-left-roll">
                <div id="horde-header-left">
                    <p>Lastrights Rumblecoin</p>
                </div>
                <div id="horde-list-left">
                    <div id="lastrights">
                        <?php include 'scripts/lastrights.php'; ?>
                        <span class="span-dialog">* Click * </span>for further details, T&Cs and other indemnities.

                        <dialog id="detailsDialog">
                            <p>*"Greetings, gold-grabbers and goblin-lovers! Before you go signing away your soul (or at least a sizable sack of silver), allow me, Lastrights Rumblecoin, to elucidate the nitty-gritty:
                                
                                Duration Deliberations: Every policy lasts till your next perilous plummet. Survive a fortnight? Fantastic! But if you falter in five minutes, fear not, we'll still fork over the funds.
                                Expiry Exclusions: Beware! Deaths by dancing on inn tables or dalliances with dueling dummies aren't covered. We're Undermine Undertakers, not jesters!
                                Payment Peculiarities: All payments to be made in pristine gold coins. No chicken, sheep, or curious trinkets! Goblins have standards, after all.
                                Claim Clauses: Should you shuffle off this mortal coil (and have a valid policy), your next of kin must present the claim in person. Ghostly visitations, though entertaining, don't count.
                                Resurrection Restrictions: Those revived by pesky priests or shamans should wait a week before claiming. We need to ensure you're truly 'dead-dead', not just 'mostly-dead'.
                                So, there you have it! A smidge of small print for our sizable service. Remember, with Undermine Undertakers, you're not just buying insurance – you're investing in an afterlife adventure!"*</p>
                            <button id="closeBtn">Close</button>
                        </dialog>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Horde left list-->
        <script src="scripts/lastrights.js"></script>

        <!-- Horde right List -->
        <div class="horde-right">
            <div id="horde-right-roll">
                <div id="horde-header-right">
                    <p>...Horde deaths...</p>
                </div>
                <div id="horde-list-right">
                    <p>Green-gutted Gobblegrumps: <?php echo $orc_deaths; ?></p>
                    <p>Mold-marinated Mopers: <?php echo $undead_deaths; ?></p>
                    <p>Grass-guzzling Gigglegrazers: <?php echo $tauren_deaths; ?></p>
                    <p>Lanky Legged Lollygobbler: <?php echo $troll_deaths; ?></p>
                </div>
            </div>
        </div>
        <!-- END Horde right List -->

        <div class="ratification"></div>

        <!-- Footer -->
        <div class="footer">
            <div id="footer-flex">
                <div id="footer-left"><a href="about.php">About</a></div>
                <div id="footer-center">Privacy</div>
                <div id="footer-right">News</div>
            </div>
        </div>
        <!-- END Footer -->

    </div>

    <!-- Buy me a coffee -->
    <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="aaparky" data-description="Support me on Buy me a coffee!" data-message="Thank you for visiting! Every penny helps." data-color="#FF5F5F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>

</body>

</html>