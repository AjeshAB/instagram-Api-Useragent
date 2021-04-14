<?php
//Instagram APP API v2 UserAgent Generator
//Created by Ajesh AB
//Instagram @ig.toxicboy
//Whats App +917012045385
class UserAgent
{
    const IG_VERSION = '161.0.0.37.121';
    const VERSION_CODE = '248310203';
    const USER_AGENT_LOCALE = 'en_US';
    const USER_AGENT_FORMAT = 'Instagram %s Android (%s/%s; %s; %s; %s; %s; %s; %s; %s; %s)';
    const DEVICES = [
        '24/7.0; 380dpi; 1080x1920; OnePlus; ONEPLUS A3010; OnePlus3T; qcom',
        '23/6.0.1; 640dpi; 1440x2392; LGE/lge; RS988; h1; h1',
        '24/7.0; 640dpi; 1440x2560; HUAWEI; LON-L29; HWLON; hi3660',
        '23/6.0.1; 640dpi; 1440x2560; ZTE; ZTE A2017U; ailsa_ii; qcom',
        '23/6.0.1; 640dpi; 1440x2560; samsung; SM-G935F; hero2lte; samsungexynos8890',
        '23/6.0.1; 640dpi; 1440x2560; samsung; SM-G930F; herolte; samsungexynos8890',
        '25/7.1.1; 440dpi; 1080x1920; Xiaomi; Mi Note 3; jason; qcom',
        '23/6.0.1; 480dpi; 1080x1920; Xiaomi; Redmi Note 3; kenzo; qcom',
        '23/6.0; 480dpi; 1080x1920; Xiaomi; Redmi Note 4; nikel; mt6797',
        '24/7.0; 480dpi; 1080x1920; Xiaomi/xiaomi; Redmi Note 4; mido; qcom',
        '23/6.0; 480dpi; 1080x1920; Xiaomi; Redmi Note 4X; nikel; mt6797',
        '27/8.1.0; 440dpi; 1080x2030; Xiaomi/xiaomi; Redmi Note 5; whyred; qcom',
        '23/6.0.1; 480dpi; 1080x1920; Xiaomi; Redmi 4; markw; qcom',
        '27/8.1.0; 440dpi; 1080x2030; Xiaomi/xiaomi; Redmi 5 Plus; vince; qcom',
        '25/7.1.2; 440dpi; 1080x2030; Xiaomi/xiaomi; Redmi 5 Plus; vince; qcom',
        '26/8.0.0; 480dpi; 1080x1920; Xiaomi; MI 5; gemini; qcom',
        '27/8.1.0; 480dpi; 1080x1920; Xiaomi/xiaomi; Mi A1; tissot_sprout; qcom',
        '26/8.0.0; 480dpi; 1080x1920; Xiaomi; MI 6; sagit; qcom',
        '25/7.1.1; 440dpi; 1080x1920; Xiaomi; MI MAX 2; oxygen; qcom',
        '24/7.0; 480dpi; 1080x1920; Xiaomi; MI 5s; capricorn; qcom',
        '26/8.0.0; 480dpi; 1080x1920; samsung; SM-A520F; a5y17lte; samsungexynos7880',
        '26/8.0.0; 480dpi; 1080x2076; samsung; SM-G950F; dreamlte; samsungexynos8895',
        '26/8.0.0; 640dpi; 1440x2768; samsung; SM-G950F; dreamlte; samsungexynos8895',
        '26/8.0.0; 420dpi; 1080x2094; samsung; SM-G955F; dream2lte; samsungexynos8895',
        '26/8.0.0; 560dpi; 1440x2792; samsung; SM-G955F; dream2lte; samsungexynos8895',
        '24/7.0; 480dpi; 1080x1920; samsung; SM-A510F; a5xelte; samsungexynos7580',
        '26/8.0.0; 420dpi; 1080x2094; samsung; SM-G965F; star2lte; samsungexynos9810',
        '26/8.0.0; 480dpi; 1080x2076; samsung; SM-A530F; jackpotlte; samsungexynos7885',
        '24/7.0; 640dpi; 1440x2560; samsung; SM-G925F; zerolte; samsungexynos7420',
        '26/8.0.0; 420dpi; 1080x1920; samsung; SM-A720F; a7y17lte; samsungexynos7880',
        '24/7.0; 640dpi; 1440x2560; samsung; SM-G920F; zeroflte; samsungexynos7420',
        '24/7.0; 420dpi; 1080x1920; samsung; SM-J730FM; j7y17lte; samsungexynos7870',
        '26/8.0.0; 480dpi; 1080x2076; samsung; SM-G960F; starlte; samsungexynos9810',
        '26/8.0.0; 420dpi; 1080x2094; samsung; SM-N950F; greatlte; samsungexynos8895',
        '26/8.0.0; 420dpi; 1080x2094; samsung; SM-A730F; jackpot2lte; samsungexynos7885',
        '26/8.0.0; 420dpi; 1080x2094; samsung; SM-A605FN; a6plte; qcom',
        '26/8.0.0; 480dpi; 1080x1920; HUAWEI/HONOR; STF-L09; HWSTF; hi3660',
        '27/8.1.0; 480dpi; 1080x2280; HUAWEI/HONOR; COL-L29; HWCOL; kirin970',
        '26/8.0.0; 480dpi; 1080x2032; HUAWEI/HONOR; LLD-L31; HWLLD-H; hi6250',
        '26/8.0.0; 480dpi; 1080x2150; HUAWEI; ANE-LX1; HWANE; hi6250',
        '26/8.0.0; 480dpi; 1080x2032; HUAWEI; FIG-LX1; HWFIG-H; hi6250',
        '27/8.1.0; 480dpi; 1080x2150; HUAWEI/HONOR; COL-L29; HWCOL; kirin970',
        '26/8.0.0; 480dpi; 1080x2038; HUAWEI/HONOR; BND-L21; HWBND-H; hi6250'
    ];
    const REQUIRED_ANDROID_VERSION = '2.2';
    private $_manufacturer;
    private $_deviceString;
    private $_userAgent;
    /**
     * @var mixed|string
     */
    private $_androidVersion;
    /**
     * @var mixed|string
     */
    private $_androidRelease;
    /**
     * @var mixed|string
     */
    private $_dpi;
    /**
     * @var mixed|string
     */
    private $_resolution;
    /**
     * @var mixed|string|null
     */
    private $_brand;
    /**
     * @var mixed|string
     */
    private $_model;
    /**
     * @var mixed|string
     */
    private $_device;
    /**
     * @var mixed|string
     */
    private $_cpu;

    protected function _initFromDeviceString()
    {
        $deviceString = self::getRandomGoodDevice();
        if (!is_string($deviceString) || empty($deviceString)) {
            throw new \RuntimeException('Device string is empty.');
        }

        // Split the device identifier into its components and verify it.
        $parts = explode('; ', $deviceString);
        if (count($parts) !== 7) {
            throw new \RuntimeException(sprintf('Device string "%s" does not conform to the required device format.', $deviceString));
        }

        // Check the android version.
        $androidOS = explode('/', $parts[0], 2);
        if (version_compare($androidOS[1], self::REQUIRED_ANDROID_VERSION, '<')) {
            throw new \RuntimeException(sprintf('Device string "%s" does not meet the minimum required Android version "%s" for Instagram.', $deviceString, self::REQUIRED_ANDROID_VERSION));
        }

        // Check the screen resolution.
        $resolution = explode('x', $parts[2], 2);
        $pixelCount = (int)$resolution[0] * (int)$resolution[1];
        if ($pixelCount < 2073600) { // 1920x1080.
            throw new \RuntimeException(sprintf('Device string "%s" does not meet the minimum resolution requirement of 1920x1080.', $deviceString));
        }

        // Extract "Manufacturer/Brand" string into separate fields.
        $manufacturerAndBrand = explode('/', $parts[3], 2);

        // Store all field values.
        $this->_deviceString = $deviceString;
        $this->_androidVersion = $androidOS[0]; // "23".
        $this->_androidRelease = $androidOS[1]; // "6.0.1".
        $this->_dpi = $parts[1];
        $this->_resolution = $parts[2];
        $this->_manufacturer = $manufacturerAndBrand[0];
        $this->_brand = (isset($manufacturerAndBrand[1])
            ? $manufacturerAndBrand[1] : null);
        $this->_model = $parts[4];
        $this->_device = $parts[5];
        $this->_cpu = $parts[6];
        $this->_userAgent = self::buildUserAgent($this);
    }

    public function getDeviceString()
    {
        return $this->_deviceString;
    }

    public function getUserAgent()
    {
        self::_initFromDeviceString();
        return $this->_userAgent;
    }


    public function getAndroidVersion(): string
    {
        return $this->_androidVersion;
    }

    public function getAndroidRelease(): string
    {
        return $this->_androidRelease;
    }

    public function getDPI(): string
    {
        return $this->_dpi;
    }

    public function getResolution(): string
    {
        return $this->_resolution;
    }

    public function getManufacturer()
    {
        return $this->_manufacturer;
    }

    public function getBrand(): string
    {
        return $this->_brand;
    }

    public function getModel(): string
    {
        return $this->_model;
    }


    public function getDevice(): string
    {
        return $this->_device;
    }

    public function getCPU(): string
    {
        return $this->_cpu;
    }

    public static function buildUserAgent($device): string
    {
        // Build the appropriate "Manufacturer" or "Manufacturer/Brand" string.
        $manufacturerWithBrand = $device->getManufacturer();
        if ($device->getBrand() !== null) {
            $manufacturerWithBrand .= '/' . $device->getBrand();
        }

        // Generate the final User-Agent string.
        return sprintf(
            self::USER_AGENT_FORMAT,
            self::IG_VERSION, // App version ("27.0.0.7.97").
            $device->getAndroidVersion(),
            $device->getAndroidRelease(),
            $device->getDPI(),
            $device->getResolution(),
            $manufacturerWithBrand,
            $device->getModel(),
            $device->getDevice(),
            $device->getCPU(),
            self::USER_AGENT_LOCALE,
            self::VERSION_CODE
        );
    }

    public static function getRandomGoodDevice(): string
    {
        $randomIdx = array_rand(self::DEVICES, 1);

        return self::DEVICES[$randomIdx];
    }

}