var province = ['北京','天津','山西','内蒙古','辽宁','吉林','黑龙江','上海','江苏','浙江','安徽','福建','江西','山东','河北','河南','湖南','湖北','广东','海南','广西','重庆','四川','贵州','云南','西藏','陕西','甘肃','青海','宁夏','新疆','香港','澳门','台湾'];

var adm_lv1 = new Array();
adm_lv1['北京'] = ['东城区','西城区','朝阳区','丰台区','石景山区','海淀区','门头沟区','房山区','通州区','顺义区','昌平区','大兴区','怀柔区','平谷区','密云县','延庆县'];
adm_lv1['天津'] = ['和平区','河东区','河西区','南开区','河北区','红桥区','东丽区','西青区','津南区','北辰区','武清区','宝坻区','滨海新区','宁河县','静海县','蓟县'];
adm_lv1['上海'] = ['黄浦区','徐汇区','长宁区','静安区','普陀区','闸北区','虹口区','杨浦区','闵行区','宝山区','嘉定区','浦东新区','金山区','松江区','青浦区','奉贤区','崇明县'];
adm_lv1['重庆'] = ['渝中区','大渡口区','沙坪坝区','九龙坡区','南岸区','北碚区','渝北区','巴南区','涪陵区','黔江区','长寿区','江津区','合川区','永川区','南川区','綦江区','大足区','璧山区','铜梁区','潼南区','荣昌区','梁平县','城口县','丰都县','垫江县','武隆县','忠县','开县','云阳县','奉节县','巫山县','巫溪县','石柱县','秀山县','酉阳县','彭水县'];
adm_lv1['湖南'] = ['长沙','株洲','湘潭','衡阳','邵阳','岳阳','常德','张家界','益阳','郴州','永州','怀化','娄底','湘西州'];
adm_lv1['四川'] = ['成都','自贡','攀枝花','泸州','德阳','绵阳','广元','遂宁','内江','乐山','南充','眉山','宜宾','广安','达州','雅安','巴中','资阳','阿坝州','甘孜州','凉山州'];
adm_lv1['河北'] = ['石家庄','唐山','秦皇岛','邯郸','邢台','保定','张家口','承德','沧州','廊坊','衡水'];
adm_lv1['山西'] = ['太原','大同','阳泉','长治','晋城','朔州','晋中','运城','忻州','临汾','吕梁'];
adm_lv1['内蒙古'] = ['呼和浩特','包头','乌海','赤峰','通辽','鄂尔多斯','呼伦贝尔','巴彦淖尔','乌兰察布','兴安盟','锡林郭勒盟','阿拉善盟'];
adm_lv1['辽宁'] = ['沈阳','大连','鞍山','抚顺','本溪','丹东','锦州','营口','阜新','辽阳','盘锦','铁岭','朝阳','葫芦岛'];
adm_lv1['吉林'] = ['长春','吉林','四平','辽源','通化','白山','松原','白城','延边州'];
adm_lv1['黑龙江'] = ['哈尔滨','齐齐哈尔','鸡西','鹤岗','双鸭山','大庆','伊春','佳木斯','七台河','牡丹江','黑河','绥化','大兴安岭地区'];
adm_lv1['江苏'] = ['南京','无锡','徐州','常州','苏州','南通','连云港','淮安','盐城','扬州','镇江','泰州','宿迁'];
adm_lv1['浙江'] = ['杭州','宁波','温州','嘉兴','湖州','绍兴','金华','衢州','舟山','台州','丽水'];
adm_lv1['安徽'] = ['合肥','芜湖','蚌埠','淮南','马鞍山','淮北','铜陵','安庆','黄山','滁州','阜阳','宿州','六安','毫州','池州','宣城'];

var adm_lv2 = new Array();
adm_lv2['安徽'] = new Array();
adm_lv2['安徽']['合肥'] = ['长丰县','肥东县','肥西县','庐江县','巢湖市'];
adm_lv2['安徽']['芜湖'] = ['芜湖县','繁昌县','南陵县','无为县'];
adm_lv2['安徽']['蚌埠'] = ['怀远县','五河县','固镇县'];
adm_lv2['安徽']['淮南'] = ['凤台县'];
adm_lv2['安徽']['马鞍山'] = ['当涂县','含山县','和县'];
adm_lv2['安徽']['淮北'] = ['濉溪县'];
adm_lv2['安徽']['铜陵'] = ['铜陵县'];
adm_lv2['安徽']['安庆'] = ['怀宁县','枞阳县','潜山县','太湖县','宿松县','望江县','岳西县','桐城市'];
adm_lv2['安徽']['黄山'] = ['歙县','休宁县','黟县','祁门县'];
adm_lv2['安徽']['滁州'] = ['来安县','全椒县','定远县','凤阳县','天长市','明光市'];
adm_lv2['安徽']['阜阳'] = ['临泉县','太和县','阜南县','颍上县','界首市'];
adm_lv2['安徽']['宿州'] = ['砀山县','萧县','灵璧县','泗县'];
adm_lv2['安徽']['六安'] = ['寿县','霍邱县','舒城县','金寨县','霍山县'];
adm_lv2['安徽']['毫州'] = ['涡阳县','蒙城县','利辛县'];
adm_lv2['安徽']['池州'] = ['东至县','石台县','青阳县'];
adm_lv2['安徽']['宣城'] = ['郎溪县','广德县','泾县','绩溪县','旌德县','宁国市'];


adm_lv2['浙江'] = new Array();
adm_lv2['浙江']['杭州'] = ['桐庐县','淳安县','建德市','临安市'];
adm_lv2['浙江']['宁波'] = ['象山县','宁海县','余姚市','慈溪市','奉化市'];
adm_lv2['浙江']['温州'] = ['永嘉县','平阳县','苍南县','文成县','泰顺县','瑞安市','乐清市'];
adm_lv2['浙江']['嘉兴'] = ['嘉善县','海盐县','海宁市','平湖市','桐乡市'];
adm_lv2['浙江']['湖州'] = ['德清县','长兴县','安吉县'];
adm_lv2['浙江']['绍兴'] = ['新昌县','诸暨市','嵊州市'];
adm_lv2['浙江']['金华'] = ['武义县','浦江县','兰溪市','义乌市','东阳市','永康市'];
adm_lv2['浙江']['衢州'] = ['常山县','开化县','龙游县','江山市'];
adm_lv2['浙江']['舟山'] = ['岱山县','嵊泗县']; 
adm_lv2['浙江']['台州'] = ['玉环县','三门县','天台县','仙居县','温岭市','临海市'];
adm_lv2['浙江']['丽水'] = ['青田县','缙云县','遂昌县','松阳县','云和县','庆元县','景宁县','龙泉市'];

adm_lv2['江苏'] = new Array();
adm_lv2['江苏']['南京'] = ['Null'];
adm_lv2['江苏']['无锡'] = ['江阴市','宜兴市'];
adm_lv2['江苏']['徐州'] = ['丰县','沛县','睢宁县','新沂市','邳州市'];
adm_lv2['江苏']['常州'] = ['溧阳市'];
adm_lv2['江苏']['苏州'] = ['常熟市','张家港市','昆山市','太仓市'];
adm_lv2['江苏']['南通'] = ['海安县','如东县','启东市','如皋市','海门市'];
adm_lv2['江苏']['连云港'] = ['东海县','灌云县','灌南县'];
adm_lv2['江苏']['淮安'] = ['涟水县','洪泽县','盱眙县','金湖县'];
adm_lv2['江苏']['盐城'] = ['响水县','滨海县','阜宁县','射阳县','建湖县','东台市','大丰市'];
adm_lv2['江苏']['扬州'] = ['宝应县','仪征市','高邮市'];
adm_lv2['江苏']['镇江'] = ['丹阳市','扬中市','句容市'];
adm_lv2['江苏']['泰州'] = ['兴化市','靖江市','泰兴市'];
adm_lv2['江苏']['宿迁'] = ['沭阳县','泗阳县','泗洪县'];

adm_lv2['黑龙江'] = new Array();
adm_lv2['黑龙江']['哈尔滨'] = ['依兰县','方正县','宾县巴','彦县木兰县','通河县','延寿县','尚志市','五常市'];
adm_lv2['黑龙江']['齐齐哈尔'] = ['龙江县','依安县','泰来县','甘南县','富裕县','克山县','克东县','拜泉县','讷河市'];
adm_lv2['黑龙江']['鸡西'] = ['鸡东县','虎林市','密山市'];
adm_lv2['黑龙江']['鹤岗'] = ['萝北县','绥滨县'];
adm_lv2['黑龙江']['双鸭山'] = ['集贤县','友谊县','宝清县','饶河县'];
adm_lv2['黑龙江']['大庆'] = ['肇州县','肇源县','林甸县','杜尔伯特县'];
adm_lv2['黑龙江']['伊春'] = ['嘉荫县','铁力市'];
adm_lv2['黑龙江']['佳木斯'] = ['桦南县','桦川县','汤原县','抚远县','同江市','富锦市'];
adm_lv2['黑龙江']['七台河'] = ['勃利县'];
adm_lv2['黑龙江']['牡丹江'] = ['东宁县','林口县','绥芬河市','海林市','宁安市','穆棱市'];
adm_lv2['黑龙江']['黑河'] = ['嫩江县','逊克县','孙吴县','北安市','五大连池市'];
adm_lv2['黑龙江']['绥化'] = ['望奎县','兰西县','青冈县','庆安县','明水县','绥棱县','安达市','肇东市','海伦市'];
adm_lv2['黑龙江']['大兴安岭地区'] = ['呼玛县','塔河县','漠河县'];

adm_lv2['吉林'] = new Array();
adm_lv2['吉林']['长春'] = ['农安县','榆树市','德惠市'];
adm_lv2['吉林']['吉林'] = ['永吉县','蛟河市','桦甸市','舒兰市','磐石市'];
adm_lv2['吉林']['四平'] = ['梨树县','伊通县','公主岭市','双辽市'];
adm_lv2['吉林']['辽源'] = ['东丰县','东辽县'];
adm_lv2['吉林']['通化'] = ['通化县','辉南县','柳河县','梅河口市','集安市'];
adm_lv2['吉林']['白山'] = ['抚松县','靖宇县','长白县','临江市'];
adm_lv2['吉林']['松原'] = ['前郭县','长岭县','乾安县','扶余市'];
adm_lv2['吉林']['白城'] = ['镇赉县','通榆县','洮南市','大安市'];
adm_lv2['吉林']['延边州'] = ['延吉市','图们市','敦化市','珲春市','龙井市','和龙市','汪清县','安图县'];

adm_lv2['辽宁'] = new Array();
adm_lv2['辽宁']['沈阳'] = ['辽中县','康平县','法库县','新民市'];
adm_lv2['辽宁']['大连'] = ['长海县','瓦房店市','普兰店市','庄河市'];
adm_lv2['辽宁']['鞍山'] = ['台安县','岫岩县','海城市'];
adm_lv2['辽宁']['抚顺'] = ['抚顺县','新宾县','清原县'];
adm_lv2['辽宁']['本溪'] = ['本溪县','桓仁县'];
adm_lv2['辽宁']['丹东'] = ['宽甸县','东港市','凤城市'];
adm_lv2['辽宁']['锦州'] = ['黑山县','义县','凌海市','北镇市'];
adm_lv2['辽宁']['营口'] = ['盖州市','大石桥市'];
adm_lv2['辽宁']['阜新'] = ['阜新县','彰武县'];
adm_lv2['辽宁']['辽阳'] = ['辽阳县','灯塔市'];
adm_lv2['辽宁']['盘锦'] = ['大洼县','盘山县'];
adm_lv2['辽宁']['铁岭'] = ['铁岭县','西丰县','昌图县','调兵山市','开原市'];
adm_lv2['辽宁']['朝阳'] = ['朝阳县','建平县','喀左县','北票市','凌源市'];
adm_lv2['辽宁']['葫芦岛'] = ['绥中县','建昌县','兴城市'];

adm_lv2['内蒙古'] = new Array();
adm_lv2['内蒙古']['呼和浩特'] 	= ['土默特左旗','托克托县','和林格尔县','清水河县','武川县'];
adm_lv2['内蒙古']['包头'] 		= ['土默特右旗',' 固阳县','达茂联合旗'];
adm_lv2['内蒙古']['乌海'] 		= ['海勃湾区','海南区','乌达区'];
adm_lv2['内蒙古']['赤峰'] 		= ['阿鲁科尔沁旗','巴林左旗','巴林右旗','林西县','克什克腾旗','翁牛特旗','喀喇沁旗','宁城县','敖汉旗'];
adm_lv2['内蒙古']['通辽'] 		= ['科左中旗','科左后旗','开鲁县','库伦旗','奈曼旗','扎鲁特旗','霍林郭勒市'];
adm_lv2['内蒙古']['鄂尔多斯'] 	= ['达拉特旗','准格尔旗','鄂托克前旗','鄂托克旗','杭锦旗','伊金霍洛旗'];
adm_lv2['内蒙古']['呼伦贝尔'] 	= ['阿荣旗','莫力达瓦旗','鄂伦春旗','鄂温克旗','陈巴尔虎旗','新左旗','新右旗','满洲里市','牙克石市','扎兰屯市','额尔古纳市','根河市'];
adm_lv2['内蒙古']['巴彦淖尔'] 	= ['五原县','磴口县','乌拉特前旗','乌拉特中旗','乌拉特后旗','杭锦后旗'];
adm_lv2['内蒙古']['乌兰察布'] 	= ['卓资县','化德县','商都县','兴和县','凉城县','察右前旗','察右中旗','察右后旗','四子王旗','丰镇市'];
adm_lv2['内蒙古']['兴安盟'] 	= ['乌兰浩特市','阿尔山市','科右前旗','科右中旗','扎赉特旗','突泉县'];
adm_lv2['内蒙古']['锡林郭勒盟'] = ['二连浩特市','锡林浩特市','阿巴嘎旗','苏尼特左旗','苏尼特右旗','东乌旗','西乌旗','太仆寺旗','镶黄旗','正镶白旗','正蓝旗','多伦县'];
adm_lv2['内蒙古']['阿拉善盟'] 	= ['阿拉善左旗','阿拉善右旗','额济纳旗'];

adm_lv2['山西'] = new Array();
adm_lv2['山西']['太原'] = ['清徐县','阳曲县','娄烦县','古交市'];
adm_lv2['山西']['大同'] = ['阳高县','天镇县','广灵县','灵丘县','浑源县','左云县','大同县'];
adm_lv2['山西']['阳泉'] = ['平定县','盂县'];
adm_lv2['山西']['长治'] = ['长治县','襄垣县','屯留县','平顺县','黎城县','壶关县','长子县','武乡县','沁县','沁源县','潞城市'];
adm_lv2['山西']['晋城'] = ['沁水县','阳城县','泽州县','高平市'];
adm_lv2['山西']['朔州'] = ['山阴县','应县','右玉县','怀仁县'];
adm_lv2['山西']['晋中'] = ['榆社县','左权县','和顺县','昔阳县','寿阳县','太谷县','祁县','平遥县','灵石县'];
adm_lv2['山西']['运城'] = ['临猗县','万荣县','闻喜县','稷山县','新绛县','绛县','垣曲县','夏县','平陆县','芮城县','永济市','河津市'];
adm_lv2['山西']['忻州'] = ['定襄县','五台县','代县','繁峙县','宁武县','静乐县','神池县','五寨县','岢岚县','河曲县','保德县','偏关县','原平市'];
adm_lv2['山西']['临汾'] = ['曲沃县','翼城县','襄汾县','洪洞县','古县','安泽县','浮山县','吉县','乡宁县','大宁县','隰县','永和县','蒲县','汾西县','侯马市','霍州市'];
adm_lv2['山西']['吕梁'] = ['文水县','交城县','兴县','临县','柳林县','石楼县','岚县','中阳县','交口县','孝义市','汾阳市','永和县','蒲县','汾西县','侯马市','霍州市'];

adm_lv2['湖南'] = new Array();
adm_lv2['湖南']['长沙'] 	= ['望城县','宁乡县','浏阳市'];
adm_lv2['湖南']['株洲'] 	= ['株洲县','攸县','茶陵县','炎陵县','醴陵市'];
adm_lv2['湖南']['湘潭'] 	= ['湘潭县','湘乡市','韶山市'];
adm_lv2['湖南']['衡阳'] 	= ['衡阳县','衡南县','衡山县','衡东县','祁东县','耒阳市','常宁市'];
adm_lv2['湖南']['邵阳'] 	= ['邵东县','新邵县','邵阳县','隆回县','洞口县','绥宁县','新宁县','城步县','武冈市'];
adm_lv2['湖南']['岳阳'] 	= ['岳阳县','华容县','湘阴县','平江县','汨罗市','临湘市'];
adm_lv2['湖南']['常德'] 	= ['安乡县','汉寿','澧县','临澧县','桃源县','石门县','津市市'];
adm_lv2['湖南']['张家界'] 	= ['慈利县','桑植县'];
adm_lv2['湖南']['益阳'] 	= ['南县','桃江县','安化县','沅江市'];
adm_lv2['湖南']['郴州'] 	= ['桂阳县','宜章县','永兴县','嘉禾县','临武县','汝城县','桂东县','安仁县','资兴市'];
adm_lv2['湖南']['永州'] 	= ['祁阳县','东安县','双牌县','道县','江永县','宁远县','蓝山县','新田县','江华县'];
adm_lv2['湖南']['怀化'] 	= ['中方县','沅陵县','辰溪县','溆浦县','会同县','麻阳县','新晃县','芷江县','靖州县','通道县','洪江市'];
adm_lv2['湖南']['娄底'] 	= ['双峰县','新化县','冷水江市','涟源市'];
adm_lv2['湖南']['湘西州'] 	= ['吉首市','泸溪县','凤凰县','花垣县','保靖县','古丈县','永顺县','龙山县'];

adm_lv2['四川'] = new Array();
adm_lv2['四川']['成都'] 	= ['金堂县','双流县','郫县','大邑县','蒲江县','新津县','都江堰市','彭州市','邛崃市','崇州市'];
adm_lv2['四川']['自贡'] 	= ['荣县','富顺县'];
adm_lv2['四川']['攀枝花'] 	= ['米易县','盐边县'];
adm_lv2['四川']['泸州'] 	= ['泸县','合江县','叙永县','古蔺县'];
adm_lv2['四川']['德阳'] 	= ['中江县','罗江县','广汉市','什邡市','绵竹市'];
adm_lv2['四川']['绵阳'] 	= ['三台县','盐亭县','安县','梓潼县','北川县','平武县','江油市'];
adm_lv2['四川']['广元'] 	= ['旺苍县','青川县','剑阁县','苍溪县'];
adm_lv2['四川']['遂宁'] 	= ['蓬溪县','射洪县','大英县'];
adm_lv2['四川']['内江'] 	= ['蓬溪县','射洪县','大英县'];
adm_lv2['四川']['乐山'] 	= ['犍为县','井研县','夹江县','沐川县','峨边县','马边县','峨眉山市'];
adm_lv2['四川']['南充'] 	= ['南部县','营山县','蓬安县','仪陇县','西充县','阆中市'];
adm_lv2['四川']['眉山'] 	= ['仁寿县','洪雅县','丹棱县','青神县'];
adm_lv2['四川']['宜宾'] 	= ['宜宾县','江安县','长宁县','高县','珙县','筠连县','兴文县','屏山县'];
adm_lv2['四川']['广安'] 	= ['岳池县','武胜县','邻水县','华蓥市'];
adm_lv2['四川']['达州'] 	= ['宣汉县','开江县','大竹县','渠县','万源市'];
adm_lv2['四川']['雅安'] 	= ['荥经县','汉源县','石棉县','天全县','芦山县','宝兴县'];
adm_lv2['四川']['巴中'] 	= ['通江县','南江县','平昌县'];
adm_lv2['四川']['资阳'] 	= ['安岳县','乐至县','简阳市'];
adm_lv2['四川']['阿坝州'] 	= ['汶川县','理县','茂县','松潘县','九寨沟县','金川县','小金县','黑水县','马尔康县','壤塘县','阿坝县','若尔盖县','红原县'];
adm_lv2['四川']['甘孜州'] 	= ['康定市','泸定县','丹巴县','九龙县','雅江县','道孚县','炉霍县','甘孜县','新龙县','德格县','白玉县','石渠县','色达县','理塘县','巴塘县','乡城县','稻城县','得荣县'];
adm_lv2['四川']['凉山州'] 	= ['西昌市','木里县','盐源县','德昌县','会理县','会东县','宁南县','普格县','布拖县','金阳县','昭觉县','喜德县','冕宁县','越西县','甘洛县','美姑县','雷波县'];
 
adm_lv2['河北'] = new Array();
adm_lv2['河北']['石家庄'] 	= ['井陉县','正定县','行唐县','灵寿县','高邑县','深泽县','赞皇县','无极县','平山县','元氏县','赵县','辛集市','晋州市','新乐市'];
adm_lv2['河北']['唐山'] 	= ['滦县','滦南县','乐亭县','迁西县','玉田县','遵化市','迁安市'];
adm_lv2['河北']['秦皇岛'] 	= ['青龙县','昌黎县','抚宁县','卢龙县'];
adm_lv2['河北']['邯郸'] 	= ['邯郸县','临漳县','成安县','大名县','涉县','磁县','肥乡县','永年县','邱县','鸡泽县','广平县','馆陶县','魏县曲','曲周县','武安市'];
adm_lv2['河北']['邢台'] 	= ['邢台县','临城县','内丘县','柏乡县','隆尧县','任县','南和县','宁晋县','巨鹿县','新河县','广宗县','平乡县','威县','清河县','临西县','南宫市','沙河市'];
adm_lv2['河北']['保定'] 	= ['涞水县','阜平县','定兴县','唐县','高阳县','容城县','涞源县','望都县','安新县','易县曲','阳县','蠡县','顺平县','博野县','雄县','涿州市','定州市','安国市','高碑店市'];
adm_lv2['河北']['张家口'] 	= ['宣化县','张北县','康保县','沽源县','尚义县','蔚县','阳原县','怀安县','万全县','怀来县','涿鹿县','赤城县','崇礼县'];
adm_lv2['河北']['承德'] 	= ['承德县','兴隆县','平泉县','滦平县','隆化县','丰宁县','宽城县','围场县'];
adm_lv2['河北']['沧州'] 	= ['青县','东光县','海兴县','盐山县','肃宁县','南皮县','吴桥县','献县','孟村县','泊头市','任丘市','黄骅市','河间市'];
adm_lv2['河北']['廊坊'] 	= ['固安县','永清县','香河县','大城县','文安县','大厂县','霸州市','三河市'];
adm_lv2['河北']['衡水'] 	= ['枣强县','武邑县','武强县','饶阳县','安平县','故城县','景县','阜城县','冀州市','深州市'];