<style>
    body {
        margin: 0;
        padding: 20px;
    }

    section {

        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 12px;
    }
</style>
<section>
    <?php

    /**
     * 
     * @author: Luca Rulvoni 
     * 
     * Interface
     * 
     */

    /*----------------------------------------------------------------
        creiamo una interfaccia da associare alla classa Auto
------------------------------------------------------------------*/
    interface iCar
    {

        public function stop();
        public function start();
        public function changeGear(int $v);
        public function park();
        public function accelerate();
    }

    /*----------------------------------------------------------------
        implementiamo interfaccia con la classe Auto 
------------------------------------------------------------------*/
    class Auto implements iCar
    {
        public $iStopped = true;
        protected $gear = 0;
        const maxGear = 5;
        //protected $fuel = 0;
        //const maxFuel = 100,
        protected $isParked = false;

        public function stop()
        {

            $this->iStopped = true;
        }


        public function start()
        {

            $this->iStopped = false;
        }

        public function changeGear(int $v)
        {
            if ($v > self::maxGear) {
                $v = self::maxGear;
            }
            if ($v < 0) {
                $v = 0;
            }
            $this->gear = $v;
            if ($this->gear > 0) {
                $this->isParked = $this->isParked = false;
            }
        }

        public function park()
        {
            $this->iStopped = true;
            $this->isParked = true;
        }
        public function accelerate()
        {

            //
        }
    }

    $auto = new Auto();
    $auto->start();
    $auto->changeGear(1);
    var_dump($auto);



    ?>
</section>