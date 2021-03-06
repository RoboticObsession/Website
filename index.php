<?php
  include "includes/header.php";

  $info = json_decode(file_get_contents("info.json"));
?>
    <div id="About"><center>
    <img src="https://roboticobsession.xyz/pfp.png" alt="Profile">
    <h1 class="text-4xl">Robotic Obsession</h1>
    <p class="text-xl">Developer</p>
    <br>
    <p>Hello! i am Ricardo (<code>AKA</code> RoboticObsession) and i code</p>
    <br>
    <h3 class="text-3xl">Skills</h3>
    <?php
    foreach($info->Skills as $skill){
    ?>
    <p><?php echo $skill->Name; ?> <div class="h-3 relative max-w-xl rounded-full overflow-hidden"><div class="w-full h-full bg-gray-200 absolute"></div><div class="h-full bg-blue-200 absolute" style="width:<?php echo $skill->Percentage; ?>"></div></div></p>
    <?php
    }
    ?>
    </div>
    <br>
<div id="Projects">
  <div class="container mx-auto mt-20 grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
    <?php
    foreach($info->Projects as $project){
    ?>
    <div>
          <div class="rounded-lg overflow-hidden">
            <div class="relative overflow-hidden pb-60">
              <img
                class="absolute h-full w-full object-cover object-center"
                src="<?php echo $project->Logo; ?>"
                alt="<?php echo $project->Name; ?>"
              />
            </div>
            <div class="relative bg-blue-200">
              <div class="py-10 px-8">
                <h3 class="text-2xl font-bold"><?php echo $project->Name; ?></h3>
                <p class="leading-7"><?php echo $project->Description; ?></p>
                <div class="mt-10 flex justify-between items-center">
                  <div>
                  </div>
                  <a
                    href="<?php echo $project->Url; ?>"
                    class="flex items-center"
                  >
                    <p class="mr-4">Visit</p>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="14.125"
                      height="13.358"
                      viewBox="0 0 14.125 13.358"
                    >
                      <g transform="translate(-3 -3.293)">
                        <path
                          id="Path_7"
                          data-name="Path 7"
                          d="M14.189,10.739H3V9.2H14.189L9.361,4.378l1.085-1.085,6.679,6.679-6.679,6.679L9.361,15.566Z"
                          fill="#1d1d1d"
                          fill-rule="evenodd"
                        ></path>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
    }
    ?>
  </div>
</div>
<br>
</center></div>
<?php
  include "includes/footer.php";
?>
