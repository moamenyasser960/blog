<header>

    <div>
        <a href="/projects/blog"><img src="/projects/all-icons/apple.svg" alt="home"></a>
        <form action="/projects/blog/articles">
            <button type="submit"><img src="/projects/blog/icons/search.svg" alt="search"></button>
            <input type="search" value="<?=isset($search) ? $search : ''?>" name="search" placeholder="search">
        </form>
    </div>

    <div>

        <div>


            <?php
if ($isLog) {

} else {
    echo '<a href="/projects/blog/sign-in"><span>sign in </span> <img src="/projects/blog/icons/pngkey.com-user-png-729670.svg" alt=""></a>';
}
?>


        </div>

        <button class="hum-button"><img src="/projects/all-icons/bars.svg" alt="more"></button>

        <div>
            <?php
if ($isLog) {
    echo '<div>
                <span></span>
                <p>welcome back,<br><b>' . explode(' ', $userName)[0] . '</b>!</p>
            </div>';
}?>



            <a href="/projects/blog/settings/"><img src="/projects/all-icons/settings.svg" alt=""> settings</a>

            <a href="/projects/blog/bookmarks/"><img src="/projects/all-icons/bookmark.svg" alt=""> bookmarks</a>

            <button>
                <img src="/projects/all-icons/language.svg" alt=""> language

                <div>
                    <a data-lang="arabic" dir="rtl">عربي</a>
                    <a data-lang="english">english</a>
                </div>
            </button>


            <button>
                <img src="/projects/all-icons/book-half.svg" alt=""> theme

                <div>
                    <a data-theme="light">light</a>
                    <a data-theme="dark">dark</a>
                </div>
            </button>

            <hr>

            <?php
if ($isLog) {
    echo '<a id="logout"><img src="/projects/all-icons/box-arrow-right.svg" alt=""> log out</a>';
} else {
    echo '<a href="/projects/blog/sign-in">sign in</a>
                        <a href="/projects/blog/sign-up">create an account</a>';
}
?>

        </div>
    </div>


    <nav>

        <section>
            <a href="/projects/blog/articles/">latest</a>
            <a href="#life">life</a>
            <a href="#self-improvement">self improvement</a>
            <a href="#work">work</a>
            <a href="#technology">technology</a>
            <a href="#software-development">software development</a>
            <a href="#media">media</a>
            <a href="#society">society</a>
            <a href="#culture">culture</a>
            <a href="#world">world</a>
        </section>

        <div id="life">
            <a href="/projects/blog/articles/?tag=life">all in life</a>

            <a href="#family">family</a>
            <a href="#health">health</a>
            <a href="#relationships">relationships</a>
            <a href="#sexuality">sexuality</a>
            <a href="#home">home</a>
            <a href="#food">food</a>
            <a href="#pets">pets</a>
        </div>

        <div id="self-improvement">
            <a href="/projects/blog/articles/?tag=self improvement">all in self improvement</a>

            <a href="#mental-health">mental health</a>
            <a href="#productivity">productivity</a>
            <a href="#mindfulness">mindfulness</a>
        </div>

        <div id="work">
            <a href="/projects/blog/articles/?tag=work">all in work</a>

            <a href="#business">business</a>
            <a href="#marketing">marketing</a>
            <a href="#leadership">leadership</a>
            <a href="#remote-work">remote work</a>
        </div>

        <div id="technology">
            <a href="/projects/blog/articles/?tag=technology">all in technology</a>

            <a href="#artificial-intelligence">artificial intelligence</a>
            <a href="#blockchain">blockchain</a>
            <a href="#data-science">data science</a>
            <a href="#gadgets">gadgets</a>
            <a href="#makers">makers</a>
            <a href="#security">security</a>
            <a href="#tech-companies">tech companies</a>
            <a href="#design">design</a>
            <a href="#product-management">product management</a>
        </div>

        <div id="software-development">
            <a href="/projects/blog/articles/?tag=software development">all in software development</a>

            <a href="#programming">programming</a>
            <a href="#programming-languages">programming languages</a>
            <a href="#dev">dev ops</a>
            <a href="#operating-systems">operating systems</a>
        </div>

        <div id="media">
            <a href="/projects/blog/articles/?tag=media">all in media</a>

            <a href="#writing">writing</a>
            <a href="#art">art</a>
            <a href="#gaming">gaming</a>
            <a href="#humor">humor</a>
            <a href="#movies">movies</a>
            <a href="#music">music</a>
            <a href="#news">news</a>
            <a href="#photography">photography</a>
            <a href="#podcasts">podcasts</a>
            <a href="#television">television</a>
        </div>

        <div id="society">
            <a href="/projects/blog/articles/?tag=society">all in society</a>

            <a href="#economics">economics</a>
            <a href="#education">education</a>
            <a href="#equality">equality</a>
            <a href="#finance">finance</a>
            <a href="#law">law</a>
            <a href="#transportation">transportation</a>
            <a href="#politics">politics</a>
            <a href="#race">race</a>
            <a href="#science">science</a>
            <a href="#mathematics">mathematics</a>
            <a href="#drugs">drugs</a>
        </div>

        <div id="culture">
            <a href="/projects/blog/articles/?tag=culture">all in culture</a>

            <a href="#philosophy">philosophy</a>
            <a href="#religion">religion</a>
            <a href="#spirituality">spirituality</a>
            <a href="#cultural-studies">cultural studies</a>
            <a href="#fashion">fashion</a>
            <a href="#beauty">beauty</a>
            <a href="#language">language</a>
            <a href="#sports">sports</a>
        </div>

        <div id="world">
            <a href="/projects/blog/articles/?tag=world">all in world</a>

            <a href="#cities">cities</a>
            <a href="#nature">nature</a>
            <a href="#travel">travel</a>
        </div>







        <div id="family">
            <a href="/projects/blog/articles/?tag=family">all in family</a>
            <a href="/projects/blog/articles/?tag=adoption">adoption</a>
            <a href="/projects/blog/articles/?tag=children">children</a>
            <a href="/projects/blog/articles/?tag=elder care">elder care</a>
            <a href="/projects/blog/articles/?tag=fatherhood">fatherhood</a>
            <a href="/projects/blog/articles/?tag=motherhood">motherhood</a>
            <a href="/projects/blog/articles/?tag=parenting">parenting</a>
            <a href="/projects/blog/articles/?tag=pregnancy">pregnancy</a>
            <a href="/projects/blog/articles/?tag=seniors">seniors</a>
        </div>

        <div id="health">
            <a href="/projects/blog/articles/?tag=health">all in health</a>
            <a href="/projects/blog/articles/?tag=aging">aging</a>
            <a href="/projects/blog/articles/?tag=coronavirus">coronavirus</a>
            <a href="/projects/blog/articles/?tag=covid-19">covid-19</a>
            <a href="/projects/blog/articles/?tag=death and dying">death and dying</a>
            <a href="/projects/blog/articles/?tag=disease">disease</a>
            <a href="/projects/blog/articles/?tag=fitness">fitness</a>
            <a href="/projects/blog/articles/?tag=mens health">mens health</a>
            <a href="/projects/blog/articles/?tag=nutrition">nutrition</a>
            <a href="/projects/blog/articles/?tag=sleep">sleep</a>
            <a href="/projects/blog/articles/?tag=trans healthcare">trans healthcare</a>
            <a href="/projects/blog/articles/?tag=vaccines">vaccines</a>
            <a href="/projects/blog/articles/?tag=weight loss">weight loss</a>
            <a href="/projects/blog/articles/?tag=womens health">womens health</a>
        </div>

        <div id="relationships">
            <a href="/projects/blog/articles/?tag=relationships">all in relationships</a>
            <a href="/projects/blog/articles/?tag=dating">dating</a>
            <a href="/projects/blog/articles/?tag=divorce">divorce</a>
            <a href="/projects/blog/articles/?tag=friendship">friendship</a>
            <a href="/projects/blog/articles/?tag=love">love</a>
            <a href="/projects/blog/articles/?tag=marriage">marriage</a>
            <a href="/projects/blog/articles/?tag=polyamory">polyamory</a>
        </div>

        <div id="sexuality">
            <a href="/projects/blog/articles/?tag=sexuality">all in sexuality</a>
            <a href="/projects/blog/articles/?tag=bdsm">bdsm</a>
            <a href="/projects/blog/articles/?tag=erotica">erotica</a>
            <a href="/projects/blog/articles/?tag=kink">kink</a>
            <a href="/projects/blog/articles/?tag=sex">sex</a>
            <a href="/projects/blog/articles/?tag=sexual health">sexual health</a>
        </div>

        <div id="home">
            <a href="/projects/blog/articles/?tag=home">all in home</a>
            <a href="/projects/blog/articles/?tag=architecture">architecture</a>
            <a href="/projects/blog/articles/?tag=home improvement">home improvement</a>
            <a href="/projects/blog/articles/?tag=homeownership">homeownership</a>
            <a href="/projects/blog/articles/?tag=interior design">interior design</a>
            <a href="/projects/blog/articles/?tag=rental property">rental property</a>
            <a href="/projects/blog/articles/?tag=vacation rental">vacation rental</a>
        </div>

        <div id="food">
            <a href="/projects/blog/articles/?tag=food">all in food</a>
            <a href="/projects/blog/articles/?tag=baking">baking</a>
            <a href="/projects/blog/articles/?tag=coffee">coffee</a>
            <a href="/projects/blog/articles/?tag=cooking">cooking</a>
            <a href="/projects/blog/articles/?tag=foodies">foodies</a>
            <a href="/projects/blog/articles/?tag=restaurants">restaurants</a>
            <a href="/projects/blog/articles/?tag=tea">tea</a>
        </div>

        <div id="pets">
            <a href="/projects/blog/articles/?tag=pets">all in pets</a>
            <a href="/projects/blog/articles/?tag=cats">cats</a>
            <a href="/projects/blog/articles/?tag=dog training">dog training</a>
            <a href="/projects/blog/articles/?tag=dogs">dogs</a>
            <a href="/projects/blog/articles/?tag=hamsters">hamsters</a>
            <a href="/projects/blog/articles/?tag=horses">horses</a>
            <a href="/projects/blog/articles/?tag=pet care">pet care</a>
        </div>


        <div id="mental-health">
            <a href="/projects/blog/articles/?tag=mental health">all in mental health</a>
            <a href="/projects/blog/articles/?tag=anxiety">anxiety</a>
            <a href="/projects/blog/articles/?tag=counseling">counseling</a>
            <a href="/projects/blog/articles/?tag=grief">grief</a>
            <a href="/projects/blog/articles/?tag=life lessons">life lessons</a>
            <a href="/projects/blog/articles/?tag=self-awareness">self-awareness</a>
            <a href="/projects/blog/articles/?tag=stress">stress</a>
            <a href="/projects/blog/articles/?tag=therapy">therapy</a>
            <a href="/projects/blog/articles/?tag=trauma">trauma</a>
        </div>

        <div id="productivity">
            <a href="/projects/blog/articles/?tag=productivity">all in productivity</a>
            <a href="/projects/blog/articles/?tag=career advice">career advice</a>
            <a href="/projects/blog/articles/?tag=coaching">coaching</a>
            <a href="/projects/blog/articles/?tag=goal setting">goal setting</a>
            <a href="/projects/blog/articles/?tag=morning routines">morning routines</a>
            <a href="/projects/blog/articles/?tag=pomodoro technique">pomodoro technique</a>
            <a href="/projects/blog/articles/?tag=time management">time management</a>
            <a href="/projects/blog/articles/?tag=work life balance">work life balance</a>
        </div>

        <div id="mindfulness">
            <a href="/projects/blog/articles/?tag=mindfulness">all in mindfulness</a>
            <a href="/projects/blog/articles/?tag=guided meditation">guided meditation</a>
            <a href="/projects/blog/articles/?tag=journaling">journaling</a>
            <a href="/projects/blog/articles/?tag=meditation">meditation</a>
            <a href="/projects/blog/articles/?tag=transcendental meditation">transcendental meditation</a>
            <a href="/projects/blog/articles/?tag=yoga">yoga</a>
        </div>


        <div id="business">
            <a href="/projects/blog/articles/?tag=business">all in business</a>
            <a href="/projects/blog/articles/?tag=entrepreneurship">entrepreneurship</a>
            <a href="/projects/blog/articles/?tag=freelancing">freelancing</a>
            <a href="/projects/blog/articles/?tag=small business">small business</a>
            <a href="/projects/blog/articles/?tag=startups">startups</a>
            <a href="/projects/blog/articles/?tag=venture capital">venture capital</a>
        </div>

        <div id="marketing">
            <a href="/projects/blog/articles/?tag=marketing">all in marketing</a>
            <a href="/projects/blog/articles/?tag=advertising">advertising</a>
            <a href="/projects/blog/articles/?tag=branding">branding</a>
            <a href="/projects/blog/articles/?tag=content marketing">content marketing</a>
            <a href="/projects/blog/articles/?tag=content strategy">content strategy</a>
            <a href="/projects/blog/articles/?tag=digital marketing">digital marketing</a>
            <a href="/projects/blog/articles/?tag=seo">seo</a>
            <a href="/projects/blog/articles/?tag=social media marketing">social media marketing</a>
            <a href="/projects/blog/articles/?tag=storytelling for business">storytelling for business</a>
        </div>

        <div id="leadership">
            <a href="/projects/blog/articles/?tag=leadership">all in leadership</a>
            <a href="/projects/blog/articles/?tag=employee engagement">employee engagement</a>
            <a href="/projects/blog/articles/?tag=leadership coaching">leadership coaching</a>
            <a href="/projects/blog/articles/?tag=leadership development">leadership development</a>
            <a href="/projects/blog/articles/?tag=management">management</a>
            <a href="/projects/blog/articles/?tag=meetings">meetings</a>
            <a href="/projects/blog/articles/?tag=org charts">org charts</a>
            <a href="/projects/blog/articles/?tag=thought leadership">thought leadership</a>
        </div>

        <div id="remote-work">
            <a href="/projects/blog/articles/?tag=remote work">all in remote work</a>
            <a href="/projects/blog/articles/?tag=company retreats">company retreats</a>
            <a href="/projects/blog/articles/?tag=digital nomads">digital nomads</a>
            <a href="/projects/blog/articles/?tag=distributed teams">distributed teams</a>
            <a href="/projects/blog/articles/?tag=future of work">future of work</a>
            <a href="/projects/blog/articles/?tag=work from home">work from home</a>
        </div>

        <div id="artificial-intelligence">
            <a href="/projects/blog/articles/?tag=artificial intelligence">all in artificial intelligence</a>
            <a href="/projects/blog/articles/?tag=chatgpt">chatgpt</a>
            <a href="/projects/blog/articles/?tag=conversational ai">conversational ai</a>
            <a href="/projects/blog/articles/?tag=deep learning">deep learning</a>
            <a href="/projects/blog/articles/?tag=large language models">large language models</a>
            <a href="/projects/blog/articles/?tag=machine learning">machine learning</a>
            <a href="/projects/blog/articles/?tag=nlp">nlp</a>
            <a href="/projects/blog/articles/?tag=voice assistant">voice assistant</a>
        </div>

        <div id="blockchain">
            <a href="/projects/blog/articles/?tag=blockchain">all in blockchain</a>
            <a href="/projects/blog/articles/?tag=bitcoin">bitcoin</a>
            <a href="/projects/blog/articles/?tag=cryptocurrency">cryptocurrency</a>
            <a href="/projects/blog/articles/?tag=decentralized finance">decentralized finance</a>
            <a href="/projects/blog/articles/?tag=ethereum">ethereum</a>
            <a href="/projects/blog/articles/?tag=nft">nft</a>
            <a href="/projects/blog/articles/?tag=web3">web3</a>
        </div>

        <div id="data-science">
            <a href="/projects/blog/articles/?tag=data science">all in data science</a>
            <a href="/projects/blog/articles/?tag=analytics">analytics</a>
            <a href="/projects/blog/articles/?tag=data engineering">data engineering</a>
            <a href="/projects/blog/articles/?tag=data visualization">data visualization</a>
            <a href="/projects/blog/articles/?tag=database design">database design</a>
            <a href="/projects/blog/articles/?tag=sql">sql</a>
        </div>

        <div id="gadgets">
            <a href="/projects/blog/articles/?tag=gadgets">all in gadgets</a>
            <a href="/projects/blog/articles/?tag=ebook">ebook</a>
            <a href="/projects/blog/articles/?tag=internet of things">internet of things</a>
            <a href="/projects/blog/articles/?tag=ipad">ipad</a>
            <a href="/projects/blog/articles/?tag=smart home">smart home</a>
            <a href="/projects/blog/articles/?tag=smartphones">smartphones</a>
            <a href="/projects/blog/articles/?tag=wearables">wearables</a>
        </div>

        <div id="makers">
            <a href="/projects/blog/articles/?tag=makers">all in makers</a>
            <a href="/projects/blog/articles/?tag=3d printing">3d printing</a>
            <a href="/projects/blog/articles/?tag=arduino">arduino</a>
            <a href="/projects/blog/articles/?tag=diy">diy</a>
            <a href="/projects/blog/articles/?tag=raspberry pi">raspberry pi</a>
            <a href="/projects/blog/articles/?tag=robotics">robotics</a>
        </div>

        <div id="security">
            <a href="/projects/blog/articles/?tag=security">all in security</a>
            <a href="/projects/blog/articles/?tag=cybersecurity">cybersecurity</a>
            <a href="/projects/blog/articles/?tag=data security">data security</a>
            <a href="/projects/blog/articles/?tag=encryption">encryption</a>
            <a href="/projects/blog/articles/?tag=infosec">infosec</a>
            <a href="/projects/blog/articles/?tag=passwords">passwords</a>
            <a href="/projects/blog/articles/?tag=privacy">privacy</a>
        </div>

        <div id="tech-companies">
            <a href="/projects/blog/articles/?tag=tech companies">all in tech companies</a>
            <a href="/projects/blog/articles/?tag=amazon">amazon</a>
            <a href="/projects/blog/articles/?tag=apple">apple</a>
            <a href="/projects/blog/articles/?tag=google">google</a>
            <a href="/projects/blog/articles/?tag=mastodon">mastodon</a>
            <a href="/projects/blog/articles/?tag=medium">medium</a>
            <a href="/projects/blog/articles/?tag=meta">meta</a>
            <a href="/projects/blog/articles/?tag=microsoft">microsoft</a>
            <a href="/projects/blog/articles/?tag=tiktok">tiktok</a>
            <a href="/projects/blog/articles/?tag=twitter">twitter</a>
        </div>

        <div id="design">
            <a href="/projects/blog/articles/?tag=design">all in design</a>
            <a href="/projects/blog/articles/?tag=accessibility">accessibility</a>
            <a href="/projects/blog/articles/?tag=design systems">design systems</a>
            <a href="/projects/blog/articles/?tag=design thinking">design thinking</a>
            <a href="/projects/blog/articles/?tag=graphic design">graphic design</a>
            <a href="/projects/blog/articles/?tag=icon design">icon design</a>
            <a href="/projects/blog/articles/?tag=inclusive design">inclusive design</a>
            <a href="/projects/blog/articles/?tag=product design">product design</a>
            <a href="/projects/blog/articles/?tag=typography">typography</a>
            <a href="/projects/blog/articles/?tag=ux design">ux design</a>
            <a href="/projects/blog/articles/?tag=ux research">ux research</a>
        </div>

        <div id="product-management">
            <a href="/projects/blog/articles/?tag=product management">all in product management</a>
            <a href="/projects/blog/articles/?tag=agile">agile</a>
            <a href="/projects/blog/articles/?tag=innovation">innovation</a>
            <a href="/projects/blog/articles/?tag=kanban">kanban</a>
            <a href="/projects/blog/articles/?tag=lean startup">lean startup</a>
            <a href="/projects/blog/articles/?tag=mvp">mvp</a>
            <a href="/projects/blog/articles/?tag=product">product</a>
            <a href="/projects/blog/articles/?tag=strategy">strategy</a>
        </div>


        <div id="programming">
            <a href="/projects/blog/articles/?tag=programming">all in programming</a>
            <a href="/projects/blog/articles/?tag=android development">android development</a>
            <a href="/projects/blog/articles/?tag=coding">coding</a>
            <a href="/projects/blog/articles/?tag=flutter">flutter</a>
            <a href="/projects/blog/articles/?tag=frontend engineering">frontend engineering</a>
            <a href="/projects/blog/articles/?tag=ios development">ios development</a>
            <a href="/projects/blog/articles/?tag=mobile development">mobile development</a>
            <a href="/projects/blog/articles/?tag=software engineering">software engineering</a>
            <a href="/projects/blog/articles/?tag=web development">web development</a>
        </div>

        <div id="programming-languages">
            <a href="/projects/blog/articles/?tag=programming languages">all in programming languages</a>
            <a href="/projects/blog/articles/?tag=angular">angular</a>
            <a href="/projects/blog/articles/?tag=css">css</a>
            <a href="/projects/blog/articles/?tag=html">html</a>
            <a href="/projects/blog/articles/?tag=java">java</a>
            <a href="/projects/blog/articles/?tag=javascript">javascript</a>
            <a href="/projects/blog/articles/?tag=nodejs">nodejs</a>
            <a href="/projects/blog/articles/?tag=python">python</a>
            <a href="/projects/blog/articles/?tag=react">react</a>
            <a href="/projects/blog/articles/?tag=ruby">ruby</a>
            <a href="/projects/blog/articles/?tag=typescript">typescript</a>
        </div>

        <div id="dev">
            <a href="/projects/blog/articles/?tag=dev ops">all in dev ops</a>
            <a href="/projects/blog/articles/?tag=aws">aws</a>
            <a href="/projects/blog/articles/?tag=databricks">databricks</a>
            <a href="/projects/blog/articles/?tag=docker">docker</a>
            <a href="/projects/blog/articles/?tag=kubernetes">kubernetes</a>
            <a href="/projects/blog/articles/?tag=terraform">terraform</a>
        </div>

        <div id="operating-systems">
            <a href="/projects/blog/articles/?tag=operating systems">all in operating systems</a>
            <a href="/projects/blog/articles/?tag=android">android</a>
            <a href="/projects/blog/articles/?tag=ios">ios</a>
            <a href="/projects/blog/articles/?tag=linux">linux</a>
            <a href="/projects/blog/articles/?tag=macos">macos</a>
            <a href="/projects/blog/articles/?tag=windows">windows</a>
        </div>


        <div id="writing">
            <a href="/projects/blog/articles/?tag=writing">all in writing</a>
            <a href="/projects/blog/articles/?tag=30 day challenge">30 day challenge</a>
            <a href="/projects/blog/articles/?tag=book reviews">book reviews</a>
            <a href="/projects/blog/articles/?tag=books">books</a>
            <a href="/projects/blog/articles/?tag=creative nonfiction">creative nonfiction</a>
            <a href="/projects/blog/articles/?tag=diary">diary</a>
            <a href="/projects/blog/articles/?tag=fiction">fiction</a>
            <a href="/projects/blog/articles/?tag=haiku">haiku</a>
            <a href="/projects/blog/articles/?tag=hello world">hello world</a>
            <a href="/projects/blog/articles/?tag=memoir">memoir</a>
            <a href="/projects/blog/articles/?tag=nonfiction">nonfiction</a>
            <a href="/projects/blog/articles/?tag=personal essay">personal essay</a>
            <a href="/projects/blog/articles/?tag=poetry">poetry</a>
            <a href="/projects/blog/articles/?tag=screenwriting">screenwriting</a>
            <a href="/projects/blog/articles/?tag=short stories">short stories</a>
            <a href="/projects/blog/articles/?tag=this happened to me">this happened to me</a>
            <a href="/projects/blog/articles/?tag=writing prompts">writing prompts</a>
            <a href="/projects/blog/articles/?tag=writing tips">writing tips</a>
        </div>

        <div id="art">
            <a href="/projects/blog/articles/?tag=art">all in art</a>
            <a href="/projects/blog/articles/?tag=comics">comics</a>
            <a href="/projects/blog/articles/?tag=contemporary art">contemporary art</a>
            <a href="/projects/blog/articles/?tag=drawing">drawing</a>
            <a href="/projects/blog/articles/?tag=fine art">fine art</a>
            <a href="/projects/blog/articles/?tag=generative art">generative art</a>
            <a href="/projects/blog/articles/?tag=illustration">illustration</a>
            <a href="/projects/blog/articles/?tag=painting">painting</a>
            <a href="/projects/blog/articles/?tag=portraits">portraits</a>
            <a href="/projects/blog/articles/?tag=street art">street art</a>
        </div>

        <div id="gaming">
            <a href="/projects/blog/articles/?tag=gaming">all in gaming</a>
            <a href="/projects/blog/articles/?tag=game design">game design</a>
            <a href="/projects/blog/articles/?tag=game development">game development</a>
            <a href="/projects/blog/articles/?tag=indie game">indie game</a>
            <a href="/projects/blog/articles/?tag=metaverse">metaverse</a>
            <a href="/projects/blog/articles/?tag=nintendo">nintendo</a>
            <a href="/projects/blog/articles/?tag=playstation">playstation</a>
            <a href="/projects/blog/articles/?tag=videogames">videogames</a>
            <a href="/projects/blog/articles/?tag=virtual reality">virtual reality</a>
            <a href="/projects/blog/articles/?tag=xbox">xbox</a>
        </div>

        <div id="humor">
            <a href="/projects/blog/articles/?tag=humor">all in humor</a>
            <a href="/projects/blog/articles/?tag=comedy">comedy</a>
            <a href="/projects/blog/articles/?tag=jokes">jokes</a>
            <a href="/projects/blog/articles/?tag=parody">parody</a>
            <a href="/projects/blog/articles/?tag=satire">satire</a>
            <a href="/projects/blog/articles/?tag=stand up comedy">stand up comedy</a>
        </div>

        <div id="movies">
            <a href="/projects/blog/articles/?tag=movies">all in movies</a>
            <a href="/projects/blog/articles/?tag=cinema">cinema</a>
            <a href="/projects/blog/articles/?tag=film">film</a>
            <a href="/projects/blog/articles/?tag=filmmaking">filmmaking</a>
            <a href="/projects/blog/articles/?tag=movie reviews">movie reviews</a>
            <a href="/projects/blog/articles/?tag=oscars">oscars</a>
            <a href="/projects/blog/articles/?tag=sundance">sundance</a>
        </div>

        <div id="music">
            <a href="/projects/blog/articles/?tag=music">all in music</a>
            <a href="/projects/blog/articles/?tag=hip hop">hip hop</a>
            <a href="/projects/blog/articles/?tag=indie">indie</a>
            <a href="/projects/blog/articles/?tag=metal">metal</a>
            <a href="/projects/blog/articles/?tag=pop">pop</a>
            <a href="/projects/blog/articles/?tag=rap">rap</a>
            <a href="/projects/blog/articles/?tag=rock">rock</a>
        </div>

        <div id="news">
            <a href="/projects/blog/articles/?tag=news">all in news</a>
            <a href="/projects/blog/articles/?tag=data journalism">data journalism</a>
            <a href="/projects/blog/articles/?tag=fake news">fake news</a>
            <a href="/projects/blog/articles/?tag=journalism">journalism</a>
            <a href="/projects/blog/articles/?tag=misinformation">misinformation</a>
            <a href="/projects/blog/articles/?tag=true crime">true crime</a>
        </div>

        <div id="photography">
            <a href="/projects/blog/articles/?tag=photography">all in photography</a>
            <a href="/projects/blog/articles/?tag=cameras">cameras</a>
            <a href="/projects/blog/articles/?tag=photography tips">photography tips</a>
            <a href="/projects/blog/articles/?tag=photojournalism">photojournalism</a>
            <a href="/projects/blog/articles/?tag=photos">photos</a>
            <a href="/projects/blog/articles/?tag=street photography">street photography</a>
        </div>

        <div id="podcasts">
            <a href="/projects/blog/articles/?tag=podcasts">all in podcasts</a>
            <a href="/projects/blog/articles/?tag=podcast equipment">podcast equipment</a>
            <a href="/projects/blog/articles/?tag=podcast recommendations">podcast recommendations</a>
            <a href="/projects/blog/articles/?tag=podcasting">podcasting</a>
            <a href="/projects/blog/articles/?tag=podcasting tips">podcasting tips</a>
            <a href="/projects/blog/articles/?tag=radio">radio</a>
        </div>

        <div id="television">
            <a href="/projects/blog/articles/?tag=television">all in television</a>
            <a href="/projects/blog/articles/?tag=hbo max">hbo max</a>
            <a href="/projects/blog/articles/?tag=hulu">hulu</a>
            <a href="/projects/blog/articles/?tag=netflix">netflix</a>
            <a href="/projects/blog/articles/?tag=reality tv">reality tv</a>
            <a href="/projects/blog/articles/?tag=tv reviews">tv reviews</a>
        </div>

        <div id="economics">
            <a href="/projects/blog/articles/?tag=economics">all in economics</a>
            <a href="/projects/blog/articles/?tag=basic income">basic income</a>
            <a href="/projects/blog/articles/?tag=debt">debt</a>
            <a href="/projects/blog/articles/?tag=economy">economy</a>
            <a href="/projects/blog/articles/?tag=inflation">inflation</a>
            <a href="/projects/blog/articles/?tag=stock market">stock market</a>
        </div>

        <div id="education">
            <a href="/projects/blog/articles/?tag=education">all in education</a>
            <a href="/projects/blog/articles/?tag=charter schools">charter schools</a>
            <a href="/projects/blog/articles/?tag=education reform">education reform</a>
            <a href="/projects/blog/articles/?tag=higher education">higher education</a>
            <a href="/projects/blog/articles/?tag=phd">phd</a>
            <a href="/projects/blog/articles/?tag=public schools">public schools</a>
            <a href="/projects/blog/articles/?tag=student loans">student loans</a>
            <a href="/projects/blog/articles/?tag=study abroad">study abroad</a>
            <a href="/projects/blog/articles/?tag=teaching">teaching</a>
        </div>

        <div id="equality">
            <a href="/projects/blog/articles/?tag=equality">all in equality</a>
            <a href="/projects/blog/articles/?tag=disability">disability</a>
            <a href="/projects/blog/articles/?tag=discrimination">discrimination</a>
            <a href="/projects/blog/articles/?tag=diversity in tech">diversity in tech</a>
            <a href="/projects/blog/articles/?tag=feminism">feminism</a>
            <a href="/projects/blog/articles/?tag=inclusion">inclusion</a>
            <a href="/projects/blog/articles/?tag=lgbtq">lgbtq</a>
            <a href="/projects/blog/articles/?tag=racism">racism</a>
            <a href="/projects/blog/articles/?tag=transgender">transgender</a>
            <a href="/projects/blog/articles/?tag=womens rights">womens rights</a>
        </div>

        <div id="finance">
            <a href="/projects/blog/articles/?tag=finance">all in finance</a>
            <a href="/projects/blog/articles/?tag=401k">401k</a>
            <a href="/projects/blog/articles/?tag=investing">investing</a>
            <a href="/projects/blog/articles/?tag=money">money</a>
            <a href="/projects/blog/articles/?tag=philanthropy">philanthropy</a>
            <a href="/projects/blog/articles/?tag=real estate">real estate</a>
            <a href="/projects/blog/articles/?tag=retirement">retirement</a>
        </div>

        <div id="law">
            <a href="/projects/blog/articles/?tag=law">all in law</a>
            <a href="/projects/blog/articles/?tag=criminal justice">criminal justice</a>
            <a href="/projects/blog/articles/?tag=law school">law school</a>
            <a href="/projects/blog/articles/?tag=legaltech">legaltech</a>
            <a href="/projects/blog/articles/?tag=social justice">social justice</a>
            <a href="/projects/blog/articles/?tag=supreme court">supreme court</a>
        </div>

        <div id="transportation">
            <a href="/projects/blog/articles/?tag=transportation">all in transportation</a>
            <a href="/projects/blog/articles/?tag=logistics">logistics</a>
            <a href="/projects/blog/articles/?tag=public transit">public transit</a>
            <a href="/projects/blog/articles/?tag=self driving cars">self driving cars</a>
            <a href="/projects/blog/articles/?tag=trucking">trucking</a>
            <a href="/projects/blog/articles/?tag=urban planning">urban planning</a>
        </div>

        <div id="politics">
            <a href="/projects/blog/articles/?tag=politics">all in politics</a>
            <a href="/projects/blog/articles/?tag=elections">elections</a>
            <a href="/projects/blog/articles/?tag=government">government</a>
            <a href="/projects/blog/articles/?tag=gun control">gun control</a>
            <a href="/projects/blog/articles/?tag=immigration">immigration</a>
            <a href="/projects/blog/articles/?tag=political parties">political parties</a>
        </div>

        <div id="race">
            <a href="/projects/blog/articles/?tag=race">all in race</a>
            <a href="/projects/blog/articles/?tag=american indian">american indian</a>
            <a href="/projects/blog/articles/?tag=anti racism">anti racism</a>
            <a href="/projects/blog/articles/?tag=asian american">asian american</a>
            <a href="/projects/blog/articles/?tag=black lives matter">black lives matter</a>
            <a href="/projects/blog/articles/?tag=indigenous people">indigenous people</a>
            <a href="/projects/blog/articles/?tag=multiracial">multiracial</a>
            <a href="/projects/blog/articles/?tag=pacific islander">pacific islander</a>
            <a href="/projects/blog/articles/?tag=white privilege">white privilege</a>
            <a href="/projects/blog/articles/?tag=white supremacy">white supremacy</a>
        </div>

        <div id="science">
            <a href="/projects/blog/articles/?tag=science">all in science</a>
            <a href="/projects/blog/articles/?tag=archaeology">archaeology</a>
            <a href="/projects/blog/articles/?tag=astronomy">astronomy</a>
            <a href="/projects/blog/articles/?tag=astrophysics">astrophysics</a>
            <a href="/projects/blog/articles/?tag=biotechnology">biotechnology</a>
            <a href="/projects/blog/articles/?tag=chemistry">chemistry</a>
            <a href="/projects/blog/articles/?tag=ecology">ecology</a>
            <a href="/projects/blog/articles/?tag=genetics">genetics</a>
            <a href="/projects/blog/articles/?tag=geology">geology</a>
            <a href="/projects/blog/articles/?tag=medicine">medicine</a>
            <a href="/projects/blog/articles/?tag=neuroscience">neuroscience</a>
            <a href="/projects/blog/articles/?tag=physics">physics</a>
            <a href="/projects/blog/articles/?tag=psychology">psychology</a>
            <a href="/projects/blog/articles/?tag=space">space</a>
        </div>

        <div id="mathematics">
            <a href="/projects/blog/articles/?tag=mathematics">all in mathematics</a>
            <a href="/projects/blog/articles/?tag=algebra">algebra</a>
            <a href="/projects/blog/articles/?tag=calculus">calculus</a>
            <a href="/projects/blog/articles/?tag=geometry">geometry</a>
            <a href="/projects/blog/articles/?tag=probability">probability</a>
            <a href="/projects/blog/articles/?tag=statistics">statistics</a>
        </div>

        <div id="drugs">
            <a href="/projects/blog/articles/?tag=drugs">all in drugs</a>
            <a href="/projects/blog/articles/?tag=addiction">addiction</a>
            <a href="/projects/blog/articles/?tag=cannabis">cannabis</a>
            <a href="/projects/blog/articles/?tag=opioids">opioids</a>
            <a href="/projects/blog/articles/?tag=pharmaceuticals">pharmaceuticals</a>
            <a href="/projects/blog/articles/?tag=psychedelics">psychedelics</a>
        </div>


        <div id="philosophy">
            <a href="/projects/blog/articles/?tag=philosophy">all in philosophy</a>
            <a href="/projects/blog/articles/?tag=atheism">atheism</a>
            <a href="/projects/blog/articles/?tag=epistemology">epistemology</a>
            <a href="/projects/blog/articles/?tag=ethics">ethics</a>
            <a href="/projects/blog/articles/?tag=existentialism">existentialism</a>
            <a href="/projects/blog/articles/?tag=metaphysics">metaphysics</a>
            <a href="/projects/blog/articles/?tag=morality">morality</a>
            <a href="/projects/blog/articles/?tag=philosophy of mind">philosophy of mind</a>
            <a href="/projects/blog/articles/?tag=stoicism">stoicism</a>
        </div>

        <div id="religion">
            <a href="/projects/blog/articles/?tag=religion">all in religion</a>
            <a href="/projects/blog/articles/?tag=buddhism">buddhism</a>
            <a href="/projects/blog/articles/?tag=christianity">christianity</a>
            <a href="/projects/blog/articles/?tag=hinduism">hinduism</a>
            <a href="/projects/blog/articles/?tag=islam">islam</a>
            <a href="/projects/blog/articles/?tag=judaism">judaism</a>
            <a href="/projects/blog/articles/?tag=zen">zen</a>
        </div>

        <div id="spirituality">
            <a href="/projects/blog/articles/?tag=spirituality">all in spirituality</a>
            <a href="/projects/blog/articles/?tag=astrology">astrology</a>
            <a href="/projects/blog/articles/?tag=energy healing">energy healing</a>
            <a href="/projects/blog/articles/?tag=horoscopes">horoscopes</a>
            <a href="/projects/blog/articles/?tag=mysticism">mysticism</a>
            <a href="/projects/blog/articles/?tag=reiki">reiki</a>
        </div>

        <div id="cultural-studies">
            <a href="/projects/blog/articles/?tag=cultural studies">all in cultural studies</a>
            <a href="/projects/blog/articles/?tag=ancient history">ancient history</a>
            <a href="/projects/blog/articles/?tag=anthropology">anthropology</a>
            <a href="/projects/blog/articles/?tag=cultural heritage">cultural heritage</a>
            <a href="/projects/blog/articles/?tag=digital life">digital life</a>
            <a href="/projects/blog/articles/?tag=history">history</a>
            <a href="/projects/blog/articles/?tag=museums">museums</a>
            <a href="/projects/blog/articles/?tag=sociology">sociology</a>
            <a href="/projects/blog/articles/?tag=tradition">tradition</a>
        </div>

        <div id="fashion">
            <a href="/projects/blog/articles/?tag=fashion">all in fashion</a>
            <a href="/projects/blog/articles/?tag=clothing">clothing</a>
            <a href="/projects/blog/articles/?tag=fashion design">fashion design</a>
            <a href="/projects/blog/articles/?tag=fashion trends">fashion trends</a>
            <a href="/projects/blog/articles/?tag=shoes">shoes</a>
            <a href="/projects/blog/articles/?tag=sneakers">sneakers</a>
            <a href="/projects/blog/articles/?tag=style">style</a>
        </div>

        <div id="beauty">
            <a href="/projects/blog/articles/?tag=beauty">all in beauty</a>
            <a href="/projects/blog/articles/?tag=beauty tips">beauty tips</a>
            <a href="/projects/blog/articles/?tag=body image">body image</a>
            <a href="/projects/blog/articles/?tag=hair">hair</a>
            <a href="/projects/blog/articles/?tag=makeup">makeup</a>
            <a href="/projects/blog/articles/?tag=skincare">skincare</a>
        </div>

        <div id="language">
            <a href="/projects/blog/articles/?tag=language">all in language</a>
            <a href="/projects/blog/articles/?tag=arabic">arabic</a>
            <a href="/projects/blog/articles/?tag=english language">english language</a>
            <a href="/projects/blog/articles/?tag=english learning">english learning</a>
            <a href="/projects/blog/articles/?tag=french">french</a>
            <a href="/projects/blog/articles/?tag=german">german</a>
            <a href="/projects/blog/articles/?tag=hindi">hindi</a>
            <a href="/projects/blog/articles/?tag=language learning">language learning</a>
            <a href="/projects/blog/articles/?tag=linguistics">linguistics</a>
            <a href="/projects/blog/articles/?tag=mandarin">mandarin</a>
            <a href="/projects/blog/articles/?tag=portuguese">portuguese</a>
            <a href="/projects/blog/articles/?tag=spanish">spanish</a>
        </div>

        <div id="sports">
            <a href="/projects/blog/articles/?tag=sports">all in sports</a>
            <a href="/projects/blog/articles/?tag=baseball">baseball</a>
            <a href="/projects/blog/articles/?tag=basketball">basketball</a>
            <a href="/projects/blog/articles/?tag=football">football</a>
            <a href="/projects/blog/articles/?tag=nba">nba</a>
            <a href="/projects/blog/articles/?tag=nfl">nfl</a>
            <a href="/projects/blog/articles/?tag=premier league">premier league</a>
            <a href="/projects/blog/articles/?tag=soccer">soccer</a>
            <a href="/projects/blog/articles/?tag=world cup">world cup</a>
        </div>

        <div id="cities">
            <a href="/projects/blog/articles/?tag=cities">all in cities</a>
            <a href="/projects/blog/articles/?tag=abu dhabi">abu dhabi</a>
            <a href="/projects/blog/articles/?tag=amsterdam">amsterdam</a>
            <a href="/projects/blog/articles/?tag=athens">athens</a>
            <a href="/projects/blog/articles/?tag=bangkok">bangkok</a>
            <a href="/projects/blog/articles/?tag=barcelona">barcelona</a>
            <a href="/projects/blog/articles/?tag=berlin">berlin</a>
            <a href="/projects/blog/articles/?tag=boston">boston</a>
            <a href="/projects/blog/articles/?tag=buenos aires">buenos aires</a>
            <a href="/projects/blog/articles/?tag=chicago">chicago</a>
            <a href="/projects/blog/articles/?tag=copenhagen">copenhagen</a>
            <a href="/projects/blog/articles/?tag=delhi">delhi</a>
            <a href="/projects/blog/articles/?tag=dubai">dubai</a>
            <a href="/projects/blog/articles/?tag=dublin">dublin</a>
            <a href="/projects/blog/articles/?tag=edinburgh">edinburgh</a>
            <a href="/projects/blog/articles/?tag=glasgow">glasgow</a>
            <a href="/projects/blog/articles/?tag=hong kong">hong kong</a>
            <a href="/projects/blog/articles/?tag=istanbul">istanbul</a>
            <a href="/projects/blog/articles/?tag=lisbon">lisbon</a>
            <a href="/projects/blog/articles/?tag=london">london</a>
            <a href="/projects/blog/articles/?tag=los angeles">los angeles</a>
            <a href="/projects/blog/articles/?tag=madrid">madrid</a>
            <a href="/projects/blog/articles/?tag=melbourne">melbourne</a>
            <a href="/projects/blog/articles/?tag=mexico city">mexico city</a>
            <a href="/projects/blog/articles/?tag=miami">miami</a>
            <a href="/projects/blog/articles/?tag=montreal">montreal</a>
            <a href="/projects/blog/articles/?tag=new york city">new york city</a>
            <a href="/projects/blog/articles/?tag=paris">paris</a>
            <a href="/projects/blog/articles/?tag=prague">prague</a>
            <a href="/projects/blog/articles/?tag=rio de janeiro">rio de janeiro</a>
            <a href="/projects/blog/articles/?tag=rome">rome</a>
            <a href="/projects/blog/articles/?tag=san francisco">san francisco</a>
            <a href="/projects/blog/articles/?tag=sydney">sydney</a>
            <a href="/projects/blog/articles/?tag=taipei">taipei</a>
            <a href="/projects/blog/articles/?tag=tel aviv">tel aviv</a>
            <a href="/projects/blog/articles/?tag=tokyo">tokyo</a>
            <a href="/projects/blog/articles/?tag=toronto">toronto</a>
            <a href="/projects/blog/articles/?tag=vancouver">vancouver</a>
            <a href="/projects/blog/articles/?tag=vienna">vienna</a>
        </div>

        <div id="nature">
            <a href="/projects/blog/articles/?tag=nature">all in nature</a>
            <a href="/projects/blog/articles/?tag=birding">birding</a>
            <a href="/projects/blog/articles/?tag=camping">camping</a>
            <a href="/projects/blog/articles/?tag=climate change">climate change</a>
            <a href="/projects/blog/articles/?tag=conservation">conservation</a>
            <a href="/projects/blog/articles/?tag=hiking">hiking</a>
            <a href="/projects/blog/articles/?tag=sustainability">sustainability</a>
            <a href="/projects/blog/articles/?tag=wildlife">wildlife</a>
        </div>

        <div id="travel">
            <a href="/projects/blog/articles/?tag=travel">all in travel</a>
            <a href="/projects/blog/articles/?tag=tourism">tourism</a>
            <a href="/projects/blog/articles/?tag=travel tips">travel tips</a>
            <a href="/projects/blog/articles/?tag=travel writing">travel writing</a>
            <a href="/projects/blog/articles/?tag=vacation">vacation</a>
            <a href="/projects/blog/articles/?tag=vanlife">vanlife</a>
        </div>

    </nav>

    <span></span>
</header>