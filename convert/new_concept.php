<?php
	$conv->info['tag'] =
	Array()
	{
		tag:
		{
			[0] => eventCode
			[1] => eventCode
			[2] => eventCode
			[3] => eventCode
			[4] => eventCode
			[5] => eventCode
		}

		tagname:
		{
			[0] => PROFILE_VERSION
			[1] => LICENSE
			[2] => II
			[3] => GROUP
			[4] => AREA_COLOR
		}
	}

	$cap["info"][0][$tag][$key][$conv->info['tagname'][$key]]

	$cap["info"][0][eventCode][1][LICENSE]


	$conv->info['tag'][]				= "eventCode";
	$conv->info['tagname'][]			= "GROUP";
	$conv->info['hazard_level'][]		= "GROUP";

	$conv->translate['THUNDERSTORM']	= "thunderstorm";
	$conv->translate['WIND']			= "wind";

	$conv->translate['100 180 255']		= 0;
	$conv->translate['204 153 255']		= 1;


	function convert()
	{
		foreach($conv->info as $key => $tagname)
		{
			$output["info"][0][$tag][$key][$tagname][] = translate($cap["info"][0][$tag][$key][$conv->info['tagname'][$key]]);
		}
	}

	function convert()
	{
		foreach($conv->info as $key => $tagname)
		{
			$output["info"][0][$tag][$key][$tagname][] = retranslate($cap["info"][0][$tag][$key][$conv->info['tagname'][$key]]);
		}
	}

	function translate($val)
	{
		return $conv->translate[$val];
	}

	function retranslate($val)
	{
		$reconv = array_flip($conv);
		return $reconv->translate[$val];
	}

Array
(
    [identifier] => 2.49.0.1.276.DWD.PVW.1437558240606.161
    [sender] => CAP@dwd.de
    [sent] => 2015-07-22T09:24:00+00:00
    [msgType] => Alert
    [source] => PVW
    [scope] => Public
    [info] => Array
        (
            [0] => Array
                (
                    [language] => de-DE
                    [category] => Health
                    [event] => HITZE
                    [responseType] => Array
                        (
                            [0] => None
                        )

                    [urgency] => Immediate
                    [severity] => Minor
                    [certainty] => Observed
                    [eventCode] => Array
                        (
                            [0] => Array
                                (
                                    [valueName] => PROFILE_VERSION
                                    [value] => 2.1
                                )

                            [1] => Array
                                (
                                    [valueName] => LICENSE
                                    [value] => Geobasisdaten: Copyright Bundesamt für Kartographie und Geodäsie, Frankfurt am Main, 2013
                                )

                            [2] => Array
                                (
                                    [valueName] => II
                                    [value] => 247
                                )

                            [3] => Array
                                (
                                    [valueName] => GROUP
                                    [value] => HEAT
                                )

                            [4] => Array
                                (
                                    [valueName] => AREA_COLOR
                                    [value] => 204 153 255
                                )

                        )

                    [effective] => 2015-07-21T07:18:00+00:00
                    [onset] => 2015-07-21T09:00:00+00:00
                    [expires] => 2015-07-22T17:00:00+00:00
                    [senderName] => Zentrum für Medizin-Meteorologische Forschung
                    [headline] => Amtliche WARNUNG vor HITZE
                    [description] => Am Dienstag wird eine starke Wärmebelastung bis zu einer Höhe von 200m bei Gefühlten Temperaturen über 34 Grad erwartet.
Am Mittwoch wird eine starke Wärmebelastung bis zu einer Höhe von 200m bei Gefühlten Temperaturen über 34 Grad erwartet.
                    [web] => http://www.wettergefahren.de
                    [contact] => Deutscher Wetterdienst
                    [area] => Array
                        (
                            [0] => Array
                                (
                                    [areaDesc] => Kreis Ahrweiler
                                    [polygon] => Array
                                        (
                                            [0] => 50.62496543990866,7.211850969137417 50.61047138989517,7.213662909982436 50.603750712545875,7.214234271783981 50.602512449462346,7.214080690134574 50.60117880486802,7.213424364056685 50.59746535266507,7.210798638241345 50.59566508236049,7.210203568913203 50.59382243932559,7.2103331719638994 50.59214586364289,7.210918038912688 50.590477989753424,7.212124701111554 50.588305764328496,7.214597590162219 50.58558414590607,7.218339606600875 50.58421738848102,7.22095353302382 50.582835220028855,7.223978608172144 50.581409321097105,7.2283221062382825 50.58019020814898,7.234249246504232 50.579253454600476,7.239661347861967 50.5781697851616,7.25041587637112 50.57739315582228,7.25546262039471 50.57669126311037,7.258368342584086 50.57496713628727,7.263041896842878 50.572607581035804,7.267221582414099 50.56964117426725,7.270961863692096 50.566927559565954,7.273439901555185 50.5640821249932,7.275714596348428 50.56097637199346,7.278021105171357 50.558561267512886,7.278936661988293 50.54632747358048,7.282689977227547 50.518942408413224,7.297665461314446 50.51612152093535,7.299864039626883 50.511722822452136,7.303299954937186 50.50454707830848,7.310525434531693 50.49628014815407,7.320321826746154 50.48829733656971,7.329996678931192 50.47687266190187,7.343908253903573 50.472813257317135,7.337097335733825 50.46377070774391,7.315513341316263 50.45740128798189,7.298875744028803 50.433943118545805,7.288631307711292 50.41667738031326,7.28537220016488 50.41415394389027,7.28627789269413 50.40947132236934,7.285654101621147 50.40843553282426,7.285006252992534 50.39773427138867,7.275932310381524 50.39597893143135,7.268585473069564 50.39347218658419,7.2579237542612205 50.39949227778639,7.245629913986312 50.39999928813318,7.24508751876597 50.40419832630114,7.240709822679328 50.409909015391854,7.229630352251159 50.41156568029935,7.184948142609903 50.41117289251768,7.1794508147520935 50.40000004514787,7.157849548607435 50.39213966189672,7.133555446104657 50.40479582897174,7.122853392538665 50.4041621378504,7.109891114467989 50.403268545296804,7.101894438535958 50.399002628775435,7.072582170698465 50.39762529792172,7.066271034793224 50.395901324507335,7.060126547834718 50.395133098749156,7.057632364864167 50.3751481610227,7.008164674814425 50.351506249794355,6.982003284347295 50.34757701460006,6.984296282068354 50.33673517581326,6.967978632084434 50.32978545588263,6.951473154121729 50.31730040248589,6.944198848783755 50.31305641497068,6.94357709491067 50.307957699744634,6.934285158461357 50.306453664220825,6.927056919008655 50.30700656042535,6.916479677253621 50.314166893122234,6.900614158826169 50.31999372612372,6.892247003011185 50.32615900315668,6.8538783265308805 50.31832748402552,6.8373763972711785 50.326566724526316,6.796557488048076 50.33335604006621,6.795614624498178 50.34333136867631,6.80155781145452 50.35863976698313,6.807788641822491 50.36201940550104,6.802509461694503 50.3634428004081,6.80027080191971 50.37546382647817,6.785293077431347 50.392486288866586,6.769853958986682 50.396451523438856,6.769891354864939 50.399943798108225,6.773123590671585 50.40516614044961,6.779151194365182 50.42090993095392,6.784319175917432 50.43169531077933,6.768782388416107 50.46758996749164,6.7439200370867365 50.47247061652573,6.744121964343606 50.48558411943608,6.770606904484514 50.4913123871406,6.800725890032092 50.487638595835975,6.80667842327822 50.48090668813224,6.808013551166841 50.4715017707136,6.8125231351901325 50.45300520490841,6.855179455386033 50.45277721922739,6.857652289374169 50.45295789577898,6.8590915990356445 50.46832582319855,6.900891136369077 50.482989293491656,6.904283307410688 50.49997046067596,6.9054519534689245 50.50183074729204,6.905309250332523 50.50453840380035,6.901146497643572 50.507122159026935,6.8887148679663 50.52306298431954,6.883698710837433 50.525786194828804,6.882923135382018 50.52819216607051,6.884094025734762 50.52914332297709,6.885985076281085 50.53064493591666,6.9000023310151395 50.553256460107676,6.923177580360165 50.55916445457461,6.927491749456521 50.560664655152316,6.937842175326617 50.55599802995794,6.96182571794427 50.55560309522399,6.97393112112336 50.56519370214187,6.999570528618079 50.56700061255067,7.002419542875187 50.57564421900036,7.013005008109701 50.585490300927184,7.023476729910718 50.59555428035789,7.0364414241036854 50.60436676800059,7.049178379582191 50.6063241693425,7.056210258803235 50.600584056115224,7.066412514292199 50.5997793372161,7.0666130912136635 50.593744907735676,7.068145676389715 50.58628271314839,7.084708964037361 50.58582961600745,7.094065593157963 50.59015323869147,7.102933606965623 50.60438165942998,7.1117224608899665 50.60598842812987,7.11245523730301 50.605857293401094,7.12643454866754 50.600634736132555,7.141005845799943 50.600374926275464,7.147251323781386 50.612770141524884,7.173470294960354 50.62300370640826,7.183870606228804 50.62878655742397,7.188911934004655 50.643374787637164,7.195427826815387 50.649032057009215,7.211885322536909 50.62496543990866,7.211850969137417 50.62496543990866,7.211850969137417
                                        )

                                    [geocode] => Array
                                        (
                                            [0] => Array
                                                (
                                                    [valueName] => WARNCELLID
                                                    [value] => 107131000
                                                )

                                            [1] => Array
                                                (
                                                    [valueName] => STATE
                                                    [value] => RP
                                                )

                                        )

                                    [altitude] => 0.0
                                    [ceiling] => 1968.50394
                                )

                        )

                )

        )

    [status] => Actual
)
1




?>