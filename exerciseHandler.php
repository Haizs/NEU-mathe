<?php
if ($data = @file_get_contents("http://202.118.26.80/WebService/exerciseHandler.ashx?" . $_SERVER['QUERY_STRING']))
{
    echo $data;
}
else
{
    $dataSource = $_GET['dataSource'];
    if ($dataSource == '高等数学_GS') echo '[{"Id":1,"Pid":0,"Name":"第1章 函数极限与连续","startTime":"\/Date(1459489860000)\/","endTime":"\/Date(1659246660000)\/"},{"Id":2,"Pid":1,"Name":"1.1 函数","startTime":null,"endTime":null},{"Id":9,"Pid":2,"Name":"1.1.1 函数的概念","startTime":null,"endTime":null},{"Id":10,"Pid":2,"Name":"1.1.2函数的特性","startTime":null,"endTime":null},{"Id":12,"Pid":2,"Name":"1.1.3函数的运算","startTime":null,"endTime":null},{"Id":13,"Pid":2,"Name":"1.1.4初等函数及其应用","startTime":null,"endTime":null},{"Id":14,"Pid":1,"Name":"1.2极限","startTime":null,"endTime":null},{"Id":15,"Pid":14,"Name":"1.2.1函数极限的概念及性质","startTime":null,"endTime":null},{"Id":16,"Pid":14,"Name":"1.2.2极限的四则运算与复合运算","startTime":null,"endTime":null},{"Id":17,"Pid":1,"Name":"1.3无穷小与无穷大及其运算","startTime":null,"endTime":null},{"Id":18,"Pid":17,"Name":"1.3.1无穷小与无穷大的概念及其关系","startTime":null,"endTime":null},{"Id":19,"Pid":17,"Name":"1.3.2无穷小的运算性质","startTime":null,"endTime":null},{"Id":20,"Pid":1,"Name":"1.4无穷小比较及其应用","startTime":null,"endTime":null},{"Id":21,"Pid":20,"Name":"1.4.1无穷小比较的概念","startTime":null,"endTime":null},{"Id":22,"Pid":20,"Name":"1.4.2等价无穷小的应用","startTime":null,"endTime":null},{"Id":23,"Pid":1,"Name":"1.5极限存在准则 两个重要极限","startTime":null,"endTime":null},{"Id":24,"Pid":23,"Name":"1.5.1夹逼准则","startTime":null,"endTime":null},{"Id":25,"Pid":23,"Name":"1.5.2单调有界准则","startTime":null,"endTime":null},{"Id":26,"Pid":23,"Name":"1.5.3两个重要极限Ⅰ","startTime":null,"endTime":null},{"Id":27,"Pid":23,"Name":"1.5.4两个重要极限Ⅱ","startTime":null,"endTime":null},{"Id":28,"Pid":1,"Name":"1.6 连续","startTime":null,"endTime":null},{"Id":29,"Pid":28,"Name":"1.6.1函数连续的概念","startTime":null,"endTime":null},{"Id":30,"Pid":28,"Name":"1.6.2函数的间断点及其分类","startTime":null,"endTime":null},{"Id":31,"Pid":28,"Name":"1.6.3连续函数的运算及其应用","startTime":null,"endTime":null},{"Id":32,"Pid":1,"Name":"1.7闭区间上连续函数的性质","startTime":null,"endTime":null},{"Id":33,"Pid":32,"Name":"1.7.1有界性与最大值最小值定理","startTime":null,"endTime":null},{"Id":34,"Pid":32,"Name":"1.7.2零点定理与介值定理","startTime":null,"endTime":null},{"Id":35,"Pid":0,"Name":"第2章 导数与微分","startTime":"\/Date(1459489920000)\/","endTime":"\/Date(1659246720000)\/"},{"Id":36,"Pid":35,"Name":"2.1导数的概念","startTime":null,"endTime":null},{"Id":37,"Pid":36,"Name":"2.1.1导数的定义","startTime":null,"endTime":null},{"Id":38,"Pid":36,"Name":"2.1.2左右导数","startTime":null,"endTime":null},{"Id":39,"Pid":36,"Name":"2.1.3导数的几何意义","startTime":null,"endTime":null},{"Id":40,"Pid":36,"Name":"2.1.4函数的可导性与连续性的关系","startTime":null,"endTime":null},{"Id":41,"Pid":35,"Name":"2.2求导法则","startTime":null,"endTime":null},{"Id":42,"Pid":41,"Name":"2.2.1反函数的求导法则","startTime":null,"endTime":null},{"Id":43,"Pid":41,"Name":"2.2.2复合函数的求导法则","startTime":null,"endTime":null},{"Id":44,"Pid":41,"Name":"2.2.3基本初等函数的导数","startTime":null,"endTime":null},{"Id":45,"Pid":41,"Name":"2.2.4导数四则运算","startTime":null,"endTime":null},{"Id":46,"Pid":35,"Name":"2.3高阶导数","startTime":null,"endTime":null},{"Id":47,"Pid":46,"Name":"2.3.1二阶导数","startTime":null,"endTime":null},{"Id":48,"Pid":46,"Name":"2.3.2三阶级三阶以上的导数","startTime":null,"endTime":null},{"Id":49,"Pid":35,"Name":"2.4微分","startTime":null,"endTime":null},{"Id":50,"Pid":49,"Name":"2.4.1微分的定义","startTime":null,"endTime":null},{"Id":51,"Pid":49,"Name":"2.4.2函数的近似计算","startTime":null,"endTime":null},{"Id":52,"Pid":49,"Name":"2.4.3误差估计","startTime":null,"endTime":null},{"Id":53,"Pid":49,"Name":"2.4.4微分的四则运算法则","startTime":null,"endTime":null},{"Id":54,"Pid":35,"Name":"2.5隐函数的导数与微分","startTime":null,"endTime":null},{"Id":55,"Pid":54,"Name":"2.5.1隐函数的求导与微分法则","startTime":null,"endTime":null},{"Id":56,"Pid":54,"Name":"2.5.2对数求导与微分法则","startTime":null,"endTime":null},{"Id":57,"Pid":35,"Name":"2.6参数方程表示的函数的导数与微分","startTime":null,"endTime":null},{"Id":58,"Pid":57,"Name":"2.6.1参数方程表示的函数的导数","startTime":null,"endTime":null},{"Id":59,"Pid":57,"Name":"2.6.2极坐标表示的函数的导数","startTime":null,"endTime":null},{"Id":60,"Pid":57,"Name":"2.6.3相关变化率","startTime":null,"endTime":null},{"Id":61,"Pid":0,"Name":"第3章 微分中值定理与导数的应用","startTime":null,"endTime":null},{"Id":62,"Pid":61,"Name":"3.1微分中值定理","startTime":null,"endTime":null},{"Id":63,"Pid":62,"Name":"3.1.1罗尔中值定理","startTime":null,"endTime":null},{"Id":64,"Pid":62,"Name":"3.1.2拉格朗日中值定理","startTime":null,"endTime":null},{"Id":65,"Pid":62,"Name":"3.1.3柯西中值定理","startTime":null,"endTime":null},{"Id":66,"Pid":61,"Name":"3.2洛必达法则及其应用","startTime":null,"endTime":null},{"Id":67,"Pid":66,"Name":"3.2.1 0/0型未定式","startTime":null,"endTime":null},{"Id":68,"Pid":66,"Name":"3.2.2 ∞/∞型未定式","startTime":null,"endTime":null},{"Id":69,"Pid":66,"Name":"3.2.3其它类型的未定式","startTime":null,"endTime":null},{"Id":70,"Pid":61,"Name":"3.3泰勒公式38","startTime":null,"endTime":null},{"Id":71,"Pid":70,"Name":"3.3.1函数的麦克劳林展开式","startTime":null,"endTime":null},{"Id":72,"Pid":70,"Name":"3.3.2函数的泰勒展开式","startTime":null,"endTime":null},{"Id":73,"Pid":70,"Name":"3.3.3泰勒公式的应用","startTime":null,"endTime":null},{"Id":74,"Pid":61,"Name":"3.4函数的单调性51","startTime":null,"endTime":null},{"Id":75,"Pid":74,"Name":"3.4.1函数的单调性的判断","startTime":null,"endTime":null},{"Id":76,"Pid":74,"Name":"3.4.2函数的单调性的应用","startTime":null,"endTime":null},{"Id":77,"Pid":74,"Name":"3.4.3函数单调区间","startTime":null,"endTime":null},{"Id":78,"Pid":61,"Name":"3.5函数的极值与最值","startTime":null,"endTime":null},{"Id":79,"Pid":78,"Name":"3.5.1极值的定义与存在的必要条件14","startTime":null,"endTime":null},{"Id":80,"Pid":78,"Name":"3.5.2极值存在的充分条件29","startTime":null,"endTime":null},{"Id":81,"Pid":78,"Name":"3.5.3函数的最大值与最小值12","startTime":null,"endTime":null},{"Id":82,"Pid":61,"Name":"3.6曲线的凹凸性","startTime":null,"endTime":null},{"Id":83,"Pid":82,"Name":"3.6.1曲线的凹凸性的定义及其判断44","startTime":null,"endTime":null},{"Id":84,"Pid":82,"Name":"3.6.2曲线的拐点及其应用38","startTime":null,"endTime":null},{"Id":85,"Pid":82,"Name":"3.6.3导数在经济学中的应用1","startTime":null,"endTime":null},{"Id":86,"Pid":61,"Name":"3.7曲率","startTime":null,"endTime":null},{"Id":87,"Pid":86,"Name":"3.7.1曲率及其计算公式14","startTime":null,"endTime":null},{"Id":88,"Pid":86,"Name":"3.7.2曲率半径4","startTime":null,"endTime":null},{"Id":89,"Pid":61,"Name":"3.8函数图像的描绘33","startTime":null,"endTime":null},{"Id":91,"Pid":0,"Name":"第4章 不定积分","startTime":null,"endTime":null},{"Id":92,"Pid":91,"Name":"4.1 不定积分的概念与性质24","startTime":null,"endTime":null},{"Id":93,"Pid":91,"Name":"4.2直接积分法23","startTime":null,"endTime":null},{"Id":94,"Pid":91,"Name":"4.3第一换元积分法120","startTime":null,"endTime":null},{"Id":95,"Pid":91,"Name":"4.4第二换元积分法33","startTime":null,"endTime":null},{"Id":96,"Pid":91,"Name":"4.5分部积分法 30","startTime":null,"endTime":null},{"Id":97,"Pid":91,"Name":"4.6有理函数的积分 19","startTime":null,"endTime":null},{"Id":98,"Pid":0,"Name":"第5章 定积分及其应用","startTime":null,"endTime":null},{"Id":99,"Pid":98,"Name":"5.1定积分的概念 31","startTime":null,"endTime":null},{"Id":100,"Pid":98,"Name":"5.2定积分的性质 30","startTime":null,"endTime":null},{"Id":101,"Pid":98,"Name":"5.3 积分上限的函数及其导数","startTime":null,"endTime":null},{"Id":102,"Pid":101,"Name":"5.3.1积分上限的函数极限及其分析性质36","startTime":null,"endTime":null},{"Id":103,"Pid":101,"Name":"5.3.2积分上限的函数的导数94","startTime":null,"endTime":null},{"Id":104,"Pid":98,"Name":"5.4牛顿-莱布尼兹公式 26","startTime":null,"endTime":null},{"Id":105,"Pid":98,"Name":"5.5定积分的换元积分法 91","startTime":null,"endTime":null},{"Id":107,"Pid":98,"Name":"5.6 定积分的分部积分法 19","startTime":null,"endTime":null},{"Id":108,"Pid":98,"Name":"5.7广义积分的计算及审敛法","startTime":null,"endTime":null},{"Id":109,"Pid":108,"Name":"5.7.1广义积分的计算34","startTime":null,"endTime":null},{"Id":110,"Pid":108,"Name":"5.7.2广义积分审敛法43","startTime":null,"endTime":null},{"Id":111,"Pid":98,"Name":"5.8定积分的应用","startTime":null,"endTime":null},{"Id":112,"Pid":111,"Name":"5.8.1平面图形的面积 54","startTime":null,"endTime":null},{"Id":113,"Pid":111,"Name":"5.8.2体积 35","startTime":null,"endTime":null},{"Id":114,"Pid":111,"Name":"5.8.3 平面曲线弧长的计算 23","startTime":null,"endTime":null},{"Id":115,"Pid":111,"Name":"5.8.4 定积分在物理上的应用 49","startTime":null,"endTime":null},{"Id":116,"Pid":111,"Name":"5.8.5定积分求平均值6","startTime":null,"endTime":null},{"Id":117,"Pid":1,"Name":"1.8 一致连续","startTime":null,"endTime":null},{"Id":118,"Pid":14,"Name":"1.2.3 数列极限的概念和性质","startTime":null,"endTime":null},{"Id":119,"Pid":2,"Name":"1.1.0 预备知识 22","startTime":null,"endTime":null},{"Id":120,"Pid":2,"Name":"1.1.5 常用经济函数","startTime":null,"endTime":null},{"Id":121,"Pid":0,"Name":"第6章 无穷级数","startTime":null,"endTime":null},{"Id":122,"Pid":121,"Name":"6.1常数项级数的概念和性质","startTime":null,"endTime":null},{"Id":123,"Pid":122,"Name":"6.1.1常数项级数的概念40","startTime":null,"endTime":null},{"Id":124,"Pid":122,"Name":"6.1.2 收敛级数的基本性质24","startTime":null,"endTime":null},{"Id":125,"Pid":121,"Name":"6.2 正项级数的判别法","startTime":null,"endTime":null},{"Id":126,"Pid":125,"Name":"6.2.1 比较判别法29","startTime":null,"endTime":null},{"Id":127,"Pid":125,"Name":"6.2.2 比值判别法14","startTime":null,"endTime":null},{"Id":128,"Pid":125,"Name":"6.2.3 根值判别法7","startTime":null,"endTime":null},{"Id":129,"Pid":125,"Name":"6.2.4 积分判别法3","startTime":null,"endTime":null},{"Id":130,"Pid":121,"Name":"6.3 一般常数项级数","startTime":null,"endTime":null},{"Id":131,"Pid":130,"Name":"6.3.1 交错级数收敛的莱布尼茨定理15","startTime":null,"endTime":null},{"Id":132,"Pid":130,"Name":"6.3.2 绝对收敛与条件收敛32","startTime":null,"endTime":null},{"Id":133,"Pid":122,"Name":"6.1.3 柯西收敛准则2","startTime":null,"endTime":null},{"Id":134,"Pid":121,"Name":"6.4 幂级数","startTime":null,"endTime":null},{"Id":135,"Pid":134,"Name":"6.4.1函数项级数的一般概念14","startTime":null,"endTime":null},{"Id":136,"Pid":134,"Name":"6.4.2 幂级数及其收敛性53","startTime":null,"endTime":null},{"Id":137,"Pid":134,"Name":"6.4.3 幂级数的运算6","startTime":null,"endTime":null},{"Id":138,"Pid":121,"Name":"6.5 函数展开为幂级数","startTime":null,"endTime":null},{"Id":139,"Pid":138,"Name":"6.5.1泰勒级数的概念33","startTime":null,"endTime":null},{"Id":140,"Pid":138,"Name":"6.5.2 函数展开成幂级数的方法53","startTime":null,"endTime":null},{"Id":141,"Pid":121,"Name":"6.6 幂级数的应用","startTime":null,"endTime":null},{"Id":142,"Pid":141,"Name":"6.6.1 函数值的近似计算5","startTime":null,"endTime":null},{"Id":143,"Pid":141,"Name":"6.6.2 计算定积分7","startTime":null,"endTime":null},{"Id":145,"Pid":141,"Name":"6.6.3 求常数项级数的和8","startTime":null,"endTime":null},{"Id":146,"Pid":141,"Name":"6.6.4 欧拉公式1","startTime":null,"endTime":null},{"Id":147,"Pid":121,"Name":"6.7 函数项级数的一致收敛性","startTime":null,"endTime":null},{"Id":148,"Pid":147,"Name":"6.7.1 一致收敛的概念24","startTime":null,"endTime":null},{"Id":149,"Pid":147,"Name":"6.7.2 一致收敛级数的基本性质4","startTime":null,"endTime":null},{"Id":150,"Pid":147,"Name":"6.7.3 幂级数的一致收敛性2","startTime":null,"endTime":null},{"Id":151,"Pid":121,"Name":"6.8 傅里叶级数","startTime":null,"endTime":null},{"Id":153,"Pid":151,"Name":"6.8.1 周期为2?的函数的傅里叶级数","startTime":null,"endTime":null},{"Id":154,"Pid":151,"Name":"6.8.2 一般周期的函数的傅里叶级数","startTime":null,"endTime":null},{"Id":155,"Pid":151,"Name":"6.8.3 傅里叶级数的复数形式","startTime":null,"endTime":null},{"Id":157,"Pid":0,"Name":"第7章 向量代数与空间解析几何 ","startTime":null,"endTime":null},{"Id":158,"Pid":157,"Name":"7.1 向量及其线性运算","startTime":null,"endTime":null},{"Id":161,"Pid":157,"Name":"7.2 空间直角坐标系","startTime":null,"endTime":null},{"Id":162,"Pid":161,"Name":"7.2.1 空间直角坐标系 12","startTime":null,"endTime":null},{"Id":163,"Pid":158,"Name":"7.1.1 向量的概念及其性质2","startTime":null,"endTime":null},{"Id":164,"Pid":158,"Name":"7.1.2 向量的线性运算13","startTime":null,"endTime":null},{"Id":165,"Pid":161,"Name":"7.2.2 空间两点间的距离9","startTime":null,"endTime":null},{"Id":166,"Pid":157,"Name":"7.3 向量的坐标","startTime":null,"endTime":null},{"Id":167,"Pid":166,"Name":"7.3.1 向量的代数运算29","startTime":null,"endTime":null},{"Id":168,"Pid":166,"Name":"7.3.2 向量的模与方向余弦30","startTime":null,"endTime":null},{"Id":169,"Pid":166,"Name":"7.3.3 向量在轴上的投影0","startTime":null,"endTime":null},{"Id":170,"Pid":157,"Name":"7.4 数量积、向量积和混合积","startTime":null,"endTime":null},{"Id":171,"Pid":170,"Name":"7.4.1 数量积41","startTime":null,"endTime":null},{"Id":172,"Pid":170,"Name":"7.4.2 向量积24","startTime":null,"endTime":null},{"Id":173,"Pid":170,"Name":"7.4.3 混合积 0","startTime":null,"endTime":null},{"Id":174,"Pid":157,"Name":"7.5 平面及其方程42","startTime":null,"endTime":null},{"Id":175,"Pid":157,"Name":"7.6 空间直线及其方程","startTime":null,"endTime":null},{"Id":176,"Pid":175,"Name":"7.6.1 空间直线及其方程56","startTime":null,"endTime":null},{"Id":177,"Pid":175,"Name":"7.6.2 直线与平面的位置关系12","startTime":null,"endTime":null},{"Id":178,"Pid":157,"Name":"7.7 曲面及其方程","startTime":null,"endTime":null},{"Id":179,"Pid":178,"Name":"7.7.1 曲面方程的概念7","startTime":null,"endTime":null},{"Id":180,"Pid":178,"Name":"7.7.2 旋转曲面16","startTime":null,"endTime":null},{"Id":181,"Pid":178,"Name":"7.7.3 柱面1","startTime":null,"endTime":null},{"Id":182,"Pid":178,"Name":"7.7.4 二次曲面的类型13","startTime":null,"endTime":null},{"Id":183,"Pid":178,"Name":"7.7.5 相交曲面8","startTime":null,"endTime":null},{"Id":184,"Pid":178,"Name":"7.7.6 曲面的投影0","startTime":null,"endTime":null},{"Id":185,"Pid":157,"Name":"7.8 空间曲线及其方程27","startTime":null,"endTime":null},{"Id":186,"Pid":0,"Name":"第8章 多元函数的微分法及其应用","startTime":null,"endTime":null},{"Id":187,"Pid":186,"Name":"8.1 多元函数的概念、极限与连续51","startTime":null,"endTime":null},{"Id":188,"Pid":187,"Name":"8.1.1 多元函数的概念","startTime":null,"endTime":null},{"Id":189,"Pid":187,"Name":"8.1.2 二元函数的极限","startTime":null,"endTime":null},{"Id":190,"Pid":187,"Name":"8.1.3 二元函数的连续性","startTime":null,"endTime":null},{"Id":191,"Pid":186,"Name":"8.2 偏导数","startTime":null,"endTime":null},{"Id":192,"Pid":191,"Name":"8.2.1 偏导数的定义及其计算69","startTime":null,"endTime":null},{"Id":193,"Pid":191,"Name":"8.2.3 高阶偏导数45","startTime":null,"endTime":null},{"Id":194,"Pid":191,"Name":"8.2.2 偏导数的几何意义0","startTime":null,"endTime":null},{"Id":195,"Pid":186,"Name":"8.3 全微分","startTime":null,"endTime":null},{"Id":196,"Pid":195,"Name":"8.3.1 全微分的定义9","startTime":null,"endTime":null},{"Id":197,"Pid":195,"Name":"8.3.2 全微分的必要条件17","startTime":null,"endTime":null},{"Id":198,"Pid":195,"Name":"8.3.3 全微分的充分条件4","startTime":null,"endTime":null},{"Id":199,"Pid":195,"Name":"8.3.4 微分在近似计算中的应用7","startTime":null,"endTime":null},{"Id":200,"Pid":186,"Name":"8.4 多元复合函数的求导法则","startTime":null,"endTime":null},{"Id":201,"Pid":200,"Name":"8.4.1 复合函数的中间变量为一元函数情形 5","startTime":null,"endTime":null},{"Id":202,"Pid":200,"Name":"8.4.2 复合函数中间变量为多元函数情形 8","startTime":null,"endTime":null},{"Id":203,"Pid":200,"Name":"8.4.3 中间变量既有一元又有多元函数情形 1","startTime":null,"endTime":null},{"Id":204,"Pid":200,"Name":"8.4.4 全微分形式不变性 0","startTime":null,"endTime":null},{"Id":205,"Pid":186,"Name":"8.5 隐函数的求导法则","startTime":null,"endTime":null},{"Id":206,"Pid":205,"Name":"8.5.1 一个方程情形21","startTime":null,"endTime":null},{"Id":207,"Pid":205,"Name":"8.5.2 方程组情形6","startTime":null,"endTime":null},{"Id":208,"Pid":186,"Name":"8.6 微分法在几何上的应用 105","startTime":null,"endTime":null},{"Id":209,"Pid":208,"Name":"8.6.1 空间曲线的切线与法平面 55","startTime":null,"endTime":null},{"Id":210,"Pid":208,"Name":"8.6.2 空间曲面的切平面与法线 50","startTime":null,"endTime":null},{"Id":211,"Pid":186,"Name":"8.7 方向导数和梯度 36","startTime":null,"endTime":null},{"Id":212,"Pid":186,"Name":"8.8 多元函数的极值及其求法","startTime":null,"endTime":null},{"Id":213,"Pid":212,"Name":"8.8.1 二元函数极值的概念和存在的条件","startTime":null,"endTime":null},{"Id":214,"Pid":212,"Name":"8.8.2 条件极值 3","startTime":null,"endTime":null},{"Id":215,"Pid":212,"Name":"8.8.3 二元函数的最大值和最小值 14","startTime":null,"endTime":null},{"Id":216,"Pid":0,"Name":"第9章 重积分","startTime":null,"endTime":null},{"Id":217,"Pid":216,"Name":"9.1 二重积分及其计算","startTime":null,"endTime":null},{"Id":218,"Pid":217,"Name":"9.1.1 二重积分的概念及性质 34","startTime":null,"endTime":null},{"Id":219,"Pid":217,"Name":"9.1.2 利用直角坐标计算二重积分 154","startTime":null,"endTime":null},{"Id":220,"Pid":217,"Name":"9.1.3 利用极坐标计算二重积分 17","startTime":null,"endTime":null},{"Id":221,"Pid":217,"Name":"9.1.4 二重积分的积分次序 85","startTime":null,"endTime":null},{"Id":222,"Pid":216,"Name":"9.4 重积分的应用","startTime":null,"endTime":null},{"Id":223,"Pid":216,"Name":"9.2 三重积分及其计算","startTime":null,"endTime":null},{"Id":224,"Pid":223,"Name":"9.2.1 三重积分的概念及性质13","startTime":null,"endTime":null},{"Id":225,"Pid":223,"Name":"9.2.2 三重积分在直角坐标系下的计算 98","startTime":null,"endTime":null},{"Id":226,"Pid":223,"Name":"9.2.3 利用柱面坐标计算三重积分 58","startTime":null,"endTime":null},{"Id":227,"Pid":223,"Name":"9.2.4 利用球面坐标计算三重积分9","startTime":null,"endTime":null},{"Id":229,"Pid":222,"Name":"9.4.1 二重积分的应用 16","startTime":null,"endTime":null},{"Id":230,"Pid":222,"Name":"9.4.2 三重积分的应用","startTime":null,"endTime":null},{"Id":231,"Pid":216,"Name":"9.3 重积分的换元法0","startTime":null,"endTime":null},{"Id":232,"Pid":0,"Name":"第10章 曲线积分与曲面积分","startTime":null,"endTime":null},{"Id":233,"Pid":232,"Name":"10.1 第一型曲线积分","startTime":null,"endTime":null},{"Id":234,"Pid":233,"Name":"10.1.1 第一型曲线积分的概念及性质 7","startTime":null,"endTime":null},{"Id":235,"Pid":233,"Name":"10.1.2 第一型曲线积分的计算","startTime":null,"endTime":null},{"Id":236,"Pid":233,"Name":"10.1.3 第一型曲线积分的应用","startTime":null,"endTime":null},{"Id":237,"Pid":232,"Name":"10.2 第一型曲面积分","startTime":null,"endTime":null},{"Id":238,"Pid":237,"Name":"10.2.1 第一型曲面积分的概念与性质0","startTime":null,"endTime":null},{"Id":239,"Pid":237,"Name":"10.2.2 第一型曲面积分的计算42","startTime":null,"endTime":null},{"Id":240,"Pid":237,"Name":"10.2.3 第一型曲面积分的应用0","startTime":null,"endTime":null},{"Id":241,"Pid":232,"Name":"10.3 第二型曲线积分","startTime":null,"endTime":null},{"Id":242,"Pid":241,"Name":"10.3.1第二型曲线积分的概念与性质1","startTime":null,"endTime":null},{"Id":243,"Pid":241,"Name":"10.3.2 第二型曲线积分的计算","startTime":null,"endTime":null},{"Id":244,"Pid":241,"Name":"10.3.3 两类曲线积分之间的联系0","startTime":null,"endTime":null},{"Id":245,"Pid":232,"Name":"10.5 格林公式及其应用","startTime":null,"endTime":null},{"Id":246,"Pid":245,"Name":"10.5.1 利用格林公式计算曲线积分 36","startTime":null,"endTime":null},{"Id":247,"Pid":232,"Name":"10.4 第二型曲面积分","startTime":null,"endTime":null},{"Id":248,"Pid":247,"Name":"10.4.1 第二类曲面积分的概念及性质 1","startTime":null,"endTime":null},{"Id":249,"Pid":247,"Name":"10.4.2 第二类曲面积分的计算 38","startTime":null,"endTime":null},{"Id":250,"Pid":247,"Name":"10.4.3 两类曲面积分之间的联系0","startTime":null,"endTime":null},{"Id":251,"Pid":245,"Name":"10.5.2 平面上曲线积分与路径无关的条件17","startTime":null,"endTime":null},{"Id":252,"Pid":245,"Name":"10.5.3 利用格林公式求面积 7","startTime":null,"endTime":null},{"Id":253,"Pid":245,"Name":"10.5.4 二元函数的全微分求积 0","startTime":null,"endTime":null},{"Id":254,"Pid":0,"Name":"第11章 常微分方程","startTime":null,"endTime":null},{"Id":255,"Pid":254,"Name":"11.1 常微分方程的概念和性质","startTime":null,"endTime":null},{"Id":256,"Pid":232,"Name":"10.6 高斯公式、通量与散度","startTime":null,"endTime":null},{"Id":257,"Pid":256,"Name":"10.6.1 高斯公式的应用22","startTime":null,"endTime":null},{"Id":258,"Pid":256,"Name":"10.6.2 通量和散度3","startTime":null,"endTime":null},{"Id":259,"Pid":232,"Name":"10.7 斯托克斯公式、环流量与旋度","startTime":null,"endTime":null},{"Id":260,"Pid":259,"Name":"10.7.1 斯托克斯公式的应用13","startTime":null,"endTime":null},{"Id":261,"Pid":259,"Name":"10.7.2 环流量与旋度 16","startTime":null,"endTime":null},{"Id":262,"Pid":254,"Name":"11.2 可变离微分方程 41","startTime":null,"endTime":null},{"Id":263,"Pid":262,"Name":"11.2.1 可分离变量的微分方程29","startTime":null,"endTime":null},{"Id":264,"Pid":262,"Name":"11.2.2 齐次方程9","startTime":null,"endTime":null},{"Id":265,"Pid":262,"Name":"11.2.3 可化为齐次方程的微分方程3","startTime":null,"endTime":null},{"Id":266,"Pid":254,"Name":"11.3 一阶线性微分方程30","startTime":null,"endTime":null},{"Id":267,"Pid":266,"Name":"11.3.1 一阶线性微分方程21","startTime":null,"endTime":null},{"Id":268,"Pid":266,"Name":"11.3.2 伯努利方程9","startTime":null,"endTime":null},{"Id":269,"Pid":254,"Name":"11.4 全微分方程","startTime":null,"endTime":null},{"Id":270,"Pid":254,"Name":"11.5 可降阶的二阶微分方程 35","startTime":null,"endTime":null},{"Id":271,"Pid":270,"Name":"11.5.1 y”=f(x)型","startTime":null,"endTime":null},{"Id":272,"Pid":255,"Name":"11.1.1 常微分方程的概念和性质","startTime":null,"endTime":null},{"Id":273,"Pid":255,"Name":"11.1.2 二阶线性微分方程解的结构 19","startTime":null,"endTime":null},{"Id":274,"Pid":254,"Name":"11.6 二阶常系数齐次线性微分方程 32","startTime":null,"endTime":null},{"Id":276,"Pid":254,"Name":"11.7 二阶常系数非齐次线性微分方程 43","startTime":null,"endTime":null},{"Id":277,"Pid":254,"Name":"11.8 欧拉方程7","startTime":null,"endTime":null},{"Id":278,"Pid":254,"Name":"11.9 常系数线性微分方程组8","startTime":null,"endTime":null},{"Id":279,"Pid":254,"Name":"11.10 微分方程的应用27","startTime":null,"endTime":null},{"Id":280,"Pid":270,"Name":"1.5.2 y”=f(x,y’)型","startTime":null,"endTime":null},{"Id":281,"Pid":270,"Name":"1.5.3 y”=f(y,y’)型","startTime":null,"endTime":null},{"Id":282,"Pid":186,"Name":"8.9 二元函数的泰勒公式","startTime":null,"endTime":null},{"Id":283,"Pid":241,"Name":"10.3.4 第二类曲线积分的应用","startTime":null,"endTime":null}]';
    if ($dataSource == '复变函数_FB') echo '[{"Id":1,"Pid":0,"Name":"第1章 复变函数与解析函数","startTime":null,"endTime":null},{"Id":2,"Pid":0,"Name":"第2章 复变函数的积分","startTime":null,"endTime":null},{"Id":3,"Pid":0,"Name":"第3章 复变函数的级数","startTime":null,"endTime":null},{"Id":4,"Pid":0,"Name":"第4章 留数及其应用","startTime":null,"endTime":null},{"Id":5,"Pid":0,"Name":"第5章 保角映射","startTime":null,"endTime":null},{"Id":6,"Pid":1,"Name":"复数的概念、表示及运算","startTime":null,"endTime":null},{"Id":7,"Pid":1,"Name":"乘幂与方根","startTime":null,"endTime":null},{"Id":8,"Pid":0,"Name":"第6章 积分变换的预备知识","startTime":null,"endTime":null},{"Id":9,"Pid":1,"Name":"平面点集","startTime":null,"endTime":null},{"Id":10,"Pid":1,"Name":"函数的连续、导数和解析","startTime":null,"endTime":null},{"Id":11,"Pid":1,"Name":"函数可导的充要条件","startTime":null,"endTime":null},{"Id":12,"Pid":1,"Name":"初等解析函数","startTime":null,"endTime":null},{"Id":13,"Pid":2,"Name":"积分的概念、积分存在的条件及积分的性质","startTime":null,"endTime":null},{"Id":14,"Pid":2,"Name":"Cauchy积分定理","startTime":null,"endTime":null},{"Id":15,"Pid":2,"Name":"复合闭路定理","startTime":null,"endTime":null},{"Id":16,"Pid":2,"Name":"Cauchy积分公式","startTime":null,"endTime":null},{"Id":17,"Pid":2,"Name":"Cauchy导数公式","startTime":null,"endTime":null},{"Id":18,"Pid":2,"Name":"解析函数的原函数","startTime":null,"endTime":null},{"Id":19,"Pid":0,"Name":"第7章 Fourier变换","startTime":null,"endTime":null},{"Id":20,"Pid":0,"Name":"第8章 Laplace变换","startTime":null,"endTime":null},{"Id":21,"Pid":20,"Name":"Laplace变换的定义及性质","startTime":null,"endTime":null},{"Id":22,"Pid":20,"Name":"Laplace逆变换","startTime":null,"endTime":null},{"Id":23,"Pid":20,"Name":"Laplace变换的应用","startTime":null,"endTime":null},{"Id":24,"Pid":3,"Name":"复数项级数","startTime":null,"endTime":null},{"Id":25,"Pid":3,"Name":"幂级数","startTime":null,"endTime":null},{"Id":26,"Pid":3,"Name":"Taylor级数","startTime":null,"endTime":null},{"Id":27,"Pid":3,"Name":"Laurent级数","startTime":null,"endTime":null},{"Id":28,"Pid":3,"Name":"调和函数","startTime":null,"endTime":null},{"Id":29,"Pid":4,"Name":"孤立奇点","startTime":null,"endTime":null},{"Id":30,"Pid":4,"Name":"留数的一般理论及留数的计算","startTime":null,"endTime":null},{"Id":31,"Pid":4,"Name":"极点留数的计算","startTime":null,"endTime":null},{"Id":32,"Pid":4,"Name":"留数的应用","startTime":null,"endTime":null},{"Id":35,"Pid":3,"Name":"函数的零点","startTime":null,"endTime":null}]';
    if ($dataSource == '概率统计_GL') echo '[{"Id":1,"Pid":0,"Name":"第1章 随机事件与概率","startTime":null,"endTime":null},{"Id":2,"Pid":1,"Name":"1.1 随机事件","startTime":null,"endTime":null},{"Id":3,"Pid":2,"Name":"1.1.1 随机事件的概念","startTime":null,"endTime":null},{"Id":4,"Pid":2,"Name":"1.1.2 随机事件的关系","startTime":null,"endTime":null},{"Id":5,"Pid":2,"Name":"1.1.3 随机事件的运算","startTime":null,"endTime":null},{"Id":6,"Pid":0,"Name":"第2章 随机变量及其分布","startTime":null,"endTime":null},{"Id":9,"Pid":2,"Name":"1.1.4 随机事件间的运算表示","startTime":null,"endTime":null},{"Id":10,"Pid":1,"Name":"1.2 随机事件的概率","startTime":null,"endTime":null},{"Id":12,"Pid":10,"Name":"1.2.1 概率的定义与性质","startTime":null,"endTime":null},{"Id":13,"Pid":12,"Name":"1.2.1.1 概率的定义、判断与证明","startTime":null,"endTime":null},{"Id":14,"Pid":12,"Name":"1.2.1.2 概率性质的应用","startTime":null,"endTime":null},{"Id":15,"Pid":10,"Name":"1.2.2 随机事件的概率计算","startTime":null,"endTime":null},{"Id":16,"Pid":15,"Name":"1.2.2.1 两个事件的概率计算","startTime":null,"endTime":null},{"Id":17,"Pid":15,"Name":"1.2.2.2 多个事件的概率计算","startTime":null,"endTime":null},{"Id":18,"Pid":1,"Name":"1.3 古典概型和几何概型","startTime":null,"endTime":null},{"Id":19,"Pid":18,"Name":"1.3.1 排列组合计算","startTime":null,"endTime":null},{"Id":20,"Pid":18,"Name":"1.3.2 古典概型的概率计算","startTime":null,"endTime":null},{"Id":21,"Pid":20,"Name":"1.3.2.1 古典概型之数字排列、骰子与扑克","startTime":null,"endTime":null},{"Id":22,"Pid":20,"Name":"1.3.2.2 古典概型之球的分配","startTime":null,"endTime":null},{"Id":23,"Pid":20,"Name":"1.3.2.3 古典概型之人员分配、产品抽样及其它模型","startTime":null,"endTime":null},{"Id":24,"Pid":18,"Name":"1.3.3 几何概型的概率计算","startTime":null,"endTime":null},{"Id":25,"Pid":1,"Name":"1.4 条件概率","startTime":null,"endTime":null},{"Id":26,"Pid":25,"Name":"1.4.1 条件概率的定义与性质","startTime":null,"endTime":null},{"Id":27,"Pid":25,"Name":"1.4.2 条件概率的计算","startTime":null,"endTime":null},{"Id":28,"Pid":27,"Name":"1.4.2.1 条件概率的定义计算","startTime":null,"endTime":null},{"Id":29,"Pid":27,"Name":"1.4.2.2 条件概率的应用计算","startTime":null,"endTime":null},{"Id":30,"Pid":1,"Name":"1.5 全概率公式与贝叶斯公式","startTime":null,"endTime":null},{"Id":31,"Pid":30,"Name":"1.5.1 全概率公式","startTime":null,"endTime":null},{"Id":32,"Pid":30,"Name":"1.5.2 贝叶斯公式","startTime":null,"endTime":null},{"Id":33,"Pid":1,"Name":"1.6 事件的独立性","startTime":null,"endTime":null},{"Id":34,"Pid":33,"Name":"1.6.1 两个事件的独立性","startTime":null,"endTime":null},{"Id":35,"Pid":33,"Name":"1.6.2 多个事件的独立性","startTime":null,"endTime":null},{"Id":36,"Pid":33,"Name":"1.6.3事件的独立性应用","startTime":null,"endTime":null},{"Id":37,"Pid":33,"Name":"1.6.4 伯努利概型","startTime":null,"endTime":null},{"Id":38,"Pid":6,"Name":"2.1 离散型随机变量及其分布","startTime":null,"endTime":null},{"Id":39,"Pid":38,"Name":"2.1.1 分布律及其性质","startTime":null,"endTime":null},{"Id":41,"Pid":38,"Name":"2.1.2 离散型随机变量的概率计算","startTime":null,"endTime":null},{"Id":42,"Pid":41,"Name":"2.1.2.1 常见的离散型随机变量的概率计算","startTime":null,"endTime":null},{"Id":43,"Pid":42,"Name":"2.1.2.1.1 二项分布（0-1分布）","startTime":null,"endTime":null},{"Id":44,"Pid":42,"Name":"2.1.2.1.2 泊松分布、超几何分布和几何分布","startTime":null,"endTime":null},{"Id":45,"Pid":41,"Name":"2.1.2.2 一般离散型随机变量的概率计算","startTime":null,"endTime":null},{"Id":46,"Pid":6,"Name":"2.2 连续型随机变量及其分布","startTime":null,"endTime":null},{"Id":47,"Pid":46,"Name":"2.2.1 概率密度及其性质","startTime":null,"endTime":null},{"Id":50,"Pid":46,"Name":"2.2.4 连续型随机变量的概率计算","startTime":null,"endTime":null},{"Id":51,"Pid":50,"Name":"2.2.4.1 常见连续型随机变量的概率计算","startTime":null,"endTime":null},{"Id":52,"Pid":51,"Name":"2.2.4.1.1 均匀分布","startTime":null,"endTime":null},{"Id":53,"Pid":51,"Name":"2.2.4.1.2 指数分布","startTime":null,"endTime":null},{"Id":54,"Pid":51,"Name":"2.2.4.1.3 正态分布","startTime":null,"endTime":null},{"Id":55,"Pid":50,"Name":"2.2.4.2 一般连续型随机变量事件的概率计算","startTime":null,"endTime":null},{"Id":56,"Pid":0,"Name":"第3章 多维随机变量及其分布","startTime":null,"endTime":null},{"Id":57,"Pid":6,"Name":"2.3 随机变量的分布函数","startTime":null,"endTime":null},{"Id":58,"Pid":57,"Name":"2.3.1 分布函数及其性质","startTime":null,"endTime":null},{"Id":59,"Pid":57,"Name":"2.3.2 分布函数与分布律","startTime":null,"endTime":null},{"Id":60,"Pid":57,"Name":"2.3.3 分布函数与概率密度","startTime":null,"endTime":null},{"Id":62,"Pid":57,"Name":"2.3.4 分布函数与概率计算","startTime":null,"endTime":null},{"Id":63,"Pid":6,"Name":"2.4 随机变量的函数的分布","startTime":null,"endTime":null},{"Id":64,"Pid":63,"Name":"2.4.1 离散型随机变量的函数的分布","startTime":null,"endTime":null},{"Id":65,"Pid":63,"Name":"2.4.2 连续型随机变量的函数的分布","startTime":null,"endTime":null},{"Id":66,"Pid":65,"Name":"2.4.2.1 连续函数情形","startTime":null,"endTime":null},{"Id":67,"Pid":65,"Name":"2.4.2.2 非连续函数情形","startTime":null,"endTime":null},{"Id":68,"Pid":46,"Name":"2.2.2 正态分布及其性质","startTime":null,"endTime":null},{"Id":69,"Pid":56,"Name":"3.1 二维随机变量及其分布的概念","startTime":null,"endTime":null},{"Id":70,"Pid":69,"Name":"3.1.1 二维离散型随机变量及其分布的概念","startTime":null,"endTime":null},{"Id":71,"Pid":69,"Name":"3.1.2 二维连续型随机变量及其分布的概念","startTime":null,"endTime":null},{"Id":73,"Pid":56,"Name":"3.2 二维离散型随机变量及其分布","startTime":null,"endTime":null},{"Id":74,"Pid":73,"Name":"3.2.1 二维离散型随机变量的分布律","startTime":null,"endTime":null},{"Id":75,"Pid":74,"Name":"3.2.1.1 联合分布律","startTime":null,"endTime":null},{"Id":76,"Pid":74,"Name":"3.2.1.2 联合与边缘分布律","startTime":null,"endTime":null},{"Id":77,"Pid":74,"Name":"3.2.1.3 联合与条件分布律","startTime":null,"endTime":null},{"Id":78,"Pid":73,"Name":"3.2.3 二维离散型随机变量的概率计算","startTime":null,"endTime":null},{"Id":79,"Pid":73,"Name":"3.2.2 常见的二维离散型随机变量及其分布","startTime":null,"endTime":null},{"Id":80,"Pid":79,"Name":"3.2.2.1 三项分布","startTime":null,"endTime":null},{"Id":81,"Pid":79,"Name":"3.2.2.2 二维超几何分布","startTime":null,"endTime":null},{"Id":82,"Pid":56,"Name":"3.3 二维连续型随机变量及其分布","startTime":null,"endTime":null},{"Id":83,"Pid":82,"Name":"3.3.1 二维连续型随机变量的概率密度","startTime":null,"endTime":null},{"Id":84,"Pid":83,"Name":"3.3.1.1 联合概率密度","startTime":null,"endTime":null},{"Id":85,"Pid":83,"Name":"3.3.1.2 联合与边缘概率密度","startTime":null,"endTime":null},{"Id":86,"Pid":83,"Name":"3.3.1.3 联合与条件概率密度","startTime":null,"endTime":null},{"Id":87,"Pid":82,"Name":"3.3.2 常见的二维连续型随机变量及其分布","startTime":null,"endTime":null},{"Id":88,"Pid":87,"Name":"3.3.2.1 二维均匀分布","startTime":null,"endTime":null},{"Id":89,"Pid":87,"Name":"3.3.2.2 二维正态分布","startTime":null,"endTime":null},{"Id":90,"Pid":82,"Name":"3.3.3 二维连续型随机变量的概率计算","startTime":null,"endTime":null},{"Id":91,"Pid":56,"Name":"3.4 二维随机变量的分布函数","startTime":null,"endTime":null},{"Id":92,"Pid":91,"Name":"3.4.1 联合分布函数","startTime":null,"endTime":null},{"Id":93,"Pid":91,"Name":"3.4.2 联合与边缘分布函数","startTime":null,"endTime":null},{"Id":94,"Pid":56,"Name":"3.5 随机变量的独立性","startTime":null,"endTime":null},{"Id":95,"Pid":94,"Name":"3.5.1 二维随机变量相互独立的概念","startTime":null,"endTime":null},{"Id":96,"Pid":94,"Name":"3.5.2 离散型随机变量的独立性","startTime":null,"endTime":null},{"Id":97,"Pid":94,"Name":"3.5.3 连续型随机变量的独立性","startTime":null,"endTime":null},{"Id":98,"Pid":94,"Name":"3.5.4 常见随机变量的独立性","startTime":null,"endTime":null},{"Id":99,"Pid":98,"Name":"3.5.4.1 二项变量、泊松变量的独立性","startTime":null,"endTime":null},{"Id":100,"Pid":98,"Name":"3.5.4.2 均匀变量、指数变量的独立性","startTime":null,"endTime":null},{"Id":101,"Pid":98,"Name":"3.5.4.3 正态变量的独立性","startTime":null,"endTime":null},{"Id":103,"Pid":94,"Name":"3.5.5 n维随机变量的独立性","startTime":null,"endTime":null},{"Id":104,"Pid":56,"Name":"3.6 多维随机变量的函数的分布","startTime":null,"endTime":null},{"Id":105,"Pid":104,"Name":"3.6.1 二维离散型随机变量的函数的分布","startTime":null,"endTime":null},{"Id":106,"Pid":104,"Name":"3.6.2 二维连续型随机变量的函数的分布","startTime":null,"endTime":null},{"Id":107,"Pid":104,"Name":"3.6.3 最大、最小函数的分布","startTime":null,"endTime":null},{"Id":108,"Pid":104,"Name":"3.6.4 离散型与连续型随机变量的函数的分布","startTime":null,"endTime":null},{"Id":109,"Pid":104,"Name":"3.6.5 n维随机变量的函数的分布","startTime":null,"endTime":null},{"Id":110,"Pid":46,"Name":"2.2.3 正态分布标准化与应用","startTime":null,"endTime":null},{"Id":111,"Pid":0,"Name":"第4章 随机变量的数字特征","startTime":null,"endTime":null},{"Id":112,"Pid":111,"Name":"4.1 数学期望","startTime":null,"endTime":null},{"Id":113,"Pid":112,"Name":"4.1.1 数学期望的概念与性质","startTime":null,"endTime":null},{"Id":115,"Pid":112,"Name":"4.1.2 期望计算","startTime":null,"endTime":null},{"Id":116,"Pid":115,"Name":"4.1.2.1 离散型随机变量的期望","startTime":null,"endTime":null},{"Id":117,"Pid":115,"Name":"4.1.2.2 连续型随机变量的期望","startTime":null,"endTime":null},{"Id":122,"Pid":112,"Name":"4.1.4 期望应用","startTime":null,"endTime":null},{"Id":123,"Pid":111,"Name":"4.2 方差","startTime":null,"endTime":null},{"Id":124,"Pid":123,"Name":"4.2.1 方差的概念与性质","startTime":null,"endTime":null},{"Id":126,"Pid":123,"Name":"4.2.2 方差计算","startTime":null,"endTime":null},{"Id":129,"Pid":126,"Name":"4.2.2.1 离散型随机变量的方差","startTime":null,"endTime":null},{"Id":130,"Pid":126,"Name":"4.2.2.2 连续型随机变量的方差","startTime":null,"endTime":null},{"Id":131,"Pid":123,"Name":"4.2.3 随机变量的函数的方差","startTime":null,"endTime":null},{"Id":132,"Pid":131,"Name":"4.2.3.1 一维离散型随机变量的函数的方差","startTime":null,"endTime":null},{"Id":133,"Pid":131,"Name":"4.2.3.2 一维连续型随机变量的函数的方差","startTime":null,"endTime":null},{"Id":134,"Pid":131,"Name":"4.2.3.3二维离散型随机变量的函数的方差","startTime":null,"endTime":null},{"Id":135,"Pid":131,"Name":"4.2.3.4 二维连续型随机变量的函数的方差","startTime":null,"endTime":null},{"Id":136,"Pid":123,"Name":"4.2.4 切比雪夫不等式","startTime":null,"endTime":null},{"Id":137,"Pid":123,"Name":"4.2.5 方差应用","startTime":null,"endTime":null},{"Id":138,"Pid":111,"Name":"4.4 协方差与相关系数","startTime":null,"endTime":null},{"Id":139,"Pid":138,"Name":"4.4.1 协方差的概念与性质","startTime":null,"endTime":null},{"Id":140,"Pid":138,"Name":"4.4.2 协方差计算","startTime":null,"endTime":null},{"Id":141,"Pid":138,"Name":"4.4.3 相关系数的概念与性质","startTime":null,"endTime":null},{"Id":142,"Pid":138,"Name":"4.4.4 相关系数计算","startTime":null,"endTime":null},{"Id":143,"Pid":138,"Name":"4.4.5 随机变量的不相关性","startTime":null,"endTime":null},{"Id":145,"Pid":138,"Name":"4.4.6 相关系数应用","startTime":null,"endTime":null},{"Id":146,"Pid":111,"Name":"4.5 矩","startTime":null,"endTime":null},{"Id":147,"Pid":146,"Name":"4.5.1 矩的概念","startTime":null,"endTime":null},{"Id":148,"Pid":146,"Name":"4.5.2 矩计算","startTime":null,"endTime":null},{"Id":149,"Pid":0,"Name":"第5章 大数定理与中心极限定理","startTime":null,"endTime":null},{"Id":150,"Pid":149,"Name":"5.1 大数定理","startTime":null,"endTime":null},{"Id":153,"Pid":149,"Name":"5.2 中心极限定理","startTime":null,"endTime":null},{"Id":155,"Pid":150,"Name":"5.1.1 依概率收敛","startTime":null,"endTime":null},{"Id":156,"Pid":150,"Name":"5.1.2 三个大数定理","startTime":null,"endTime":null},{"Id":157,"Pid":153,"Name":"5.2.1 两个中心极限定理","startTime":null,"endTime":null},{"Id":158,"Pid":153,"Name":"5.2.2 两个中心极限定理的应用","startTime":null,"endTime":null},{"Id":160,"Pid":91,"Name":"3.4.3 联合与条件分布函数","startTime":null,"endTime":null},{"Id":161,"Pid":112,"Name":"4.1.3 随机变量函数的期望","startTime":null,"endTime":null},{"Id":162,"Pid":161,"Name":"4.1.3.1 一维离散型随机变量的函数的期望","startTime":null,"endTime":null},{"Id":163,"Pid":161,"Name":"4.1.3.2 一维连续型随机变量的函数的期望","startTime":null,"endTime":null},{"Id":164,"Pid":161,"Name":"4.1.3.3 二维离散型随机变量的函数的期望","startTime":null,"endTime":null},{"Id":165,"Pid":161,"Name":"4.1.3.4 二维连续型随机变量的函数的期望","startTime":null,"endTime":null},{"Id":166,"Pid":111,"Name":"4.3 期望与方差计算","startTime":null,"endTime":null},{"Id":167,"Pid":166,"Name":"4.3.1 常见分布的期望与方差","startTime":null,"endTime":null},{"Id":168,"Pid":167,"Name":"4.3.1.1 常见离散型分布的期望与方差","startTime":null,"endTime":null},{"Id":169,"Pid":167,"Name":"4.3.1.2 常见连续型分布的期望与方差","startTime":null,"endTime":null},{"Id":170,"Pid":166,"Name":"4.3.2 一般离散型分布的期望与方差","startTime":null,"endTime":null},{"Id":171,"Pid":170,"Name":"4.3.2.1 离散型随机变量的期望与方差","startTime":null,"endTime":null},{"Id":172,"Pid":170,"Name":"4.3.2.2 离散型随机变量函数的期望与方差","startTime":null,"endTime":null},{"Id":173,"Pid":166,"Name":"4.3.3 一般连续型分布的期望与方差","startTime":null,"endTime":null},{"Id":174,"Pid":173,"Name":"4.3.3.1 连续型随机变量的期望与方差","startTime":null,"endTime":null},{"Id":175,"Pid":173,"Name":"4.3.3.2 连续型随机变量函数的期望与方差","startTime":null,"endTime":null},{"Id":176,"Pid":0,"Name":"第6章 样本与抽样分布","startTime":"\/Date(1459758960000)\/","endTime":"\/Date(1609403760000)\/"},{"Id":177,"Pid":176,"Name":"6.1 总体与样本","startTime":null,"endTime":null},{"Id":178,"Pid":177,"Name":"6.1.1 简单随机样本与样本的联合分布","startTime":null,"endTime":null},{"Id":179,"Pid":177,"Name":"6.1.2 直方图、条形图及经验分布函数","startTime":null,"endTime":null},{"Id":180,"Pid":176,"Name":"6.2 样本的数字特征","startTime":null,"endTime":null},{"Id":181,"Pid":180,"Name":"6.2.1 基本数字特征","startTime":null,"endTime":null},{"Id":182,"Pid":180,"Name":"6.2.2 简易数字特征","startTime":null,"endTime":null},{"Id":183,"Pid":176,"Name":"6.3 三个常用的抽样分布","startTime":null,"endTime":null},{"Id":184,"Pid":183,"Name":"6.3.1 分位数","startTime":null,"endTime":null},{"Id":185,"Pid":183,"Name":"6.3.2 χ2分布、t分布和F分布","startTime":null,"endTime":null},{"Id":186,"Pid":176,"Name":"6.4 常用统计量及其分布","startTime":null,"endTime":null},{"Id":187,"Pid":186,"Name":"6.4.1 统计量的概念","startTime":null,"endTime":null},{"Id":188,"Pid":186,"Name":"6.4.2 单个正态总体的抽样分布","startTime":null,"endTime":null},{"Id":189,"Pid":188,"Name":"6.4.2.1 单个正态总体的抽样分布定理","startTime":null,"endTime":null},{"Id":190,"Pid":188,"Name":"6.4.2.2 单个正态总体的抽样应用","startTime":null,"endTime":null},{"Id":191,"Pid":186,"Name":"6.4.3 两个正态总体的抽样分布","startTime":null,"endTime":null},{"Id":192,"Pid":191,"Name":"6.4.3.1 两个正态总体的抽样分布定理","startTime":null,"endTime":null},{"Id":193,"Pid":191,"Name":"6.4.3.2 两个正态总体的抽样应用","startTime":null,"endTime":null},{"Id":194,"Pid":186,"Name":"6.4.4 一般总体的抽样分布","startTime":null,"endTime":null},{"Id":196,"Pid":0,"Name":"第7章 参数估计","startTime":"\/Date(1459779300000)\/","endTime":"\/Date(1609424100000)\/"},{"Id":197,"Pid":196,"Name":"7.1 参数估计的概念","startTime":null,"endTime":null},{"Id":198,"Pid":197,"Name":"7.1.1 点估计与区间估计的概念","startTime":null,"endTime":null},{"Id":199,"Pid":197,"Name":"7.1.2 估计量","startTime":null,"endTime":null},{"Id":200,"Pid":196,"Name":"7.2 点估计","startTime":null,"endTime":null},{"Id":201,"Pid":200,"Name":"7.2.1 点估计的方法","startTime":null,"endTime":null},{"Id":202,"Pid":201,"Name":"7.2.1.1 矩估计法","startTime":null,"endTime":null},{"Id":203,"Pid":201,"Name":"7.2.1.2 最大似然估计法","startTime":null,"endTime":null},{"Id":204,"Pid":200,"Name":"7.2.2 点估计量的评价准则","startTime":null,"endTime":null},{"Id":205,"Pid":204,"Name":"7.2.2.1 无偏性","startTime":null,"endTime":null},{"Id":206,"Pid":204,"Name":"7.2.2.2 有效性和相合性","startTime":null,"endTime":null},{"Id":208,"Pid":196,"Name":"7.3 区间估计","startTime":null,"endTime":null},{"Id":209,"Pid":208,"Name":"7.3.1 单个正态总体均值与方差的区间估计","startTime":null,"endTime":null},{"Id":210,"Pid":209,"Name":"7.3.1.1 均值的区间估计","startTime":null,"endTime":null},{"Id":211,"Pid":209,"Name":"7.3.1.2 方差的区间估计","startTime":null,"endTime":null},{"Id":212,"Pid":208,"Name":"7.3.2 两个正态总体均值差与方差比的区间估计","startTime":null,"endTime":null},{"Id":213,"Pid":212,"Name":"7.3.2.1 均值差的区间估计","startTime":null,"endTime":null},{"Id":214,"Pid":212,"Name":"7.3.2.2 方差比的区间估计","startTime":null,"endTime":null},{"Id":215,"Pid":208,"Name":"7.3.3 一般总体参数的区间估计","startTime":null,"endTime":null},{"Id":216,"Pid":0,"Name":"第8章 假设检验","startTime":"\/Date(1459780440000)\/","endTime":"\/Date(1609425240000)\/"},{"Id":217,"Pid":216,"Name":"8.1 假设检验的基本概念","startTime":null,"endTime":null},{"Id":218,"Pid":216,"Name":"8.2 正态总体参数的假设检验","startTime":null,"endTime":null},{"Id":220,"Pid":217,"Name":"8.1.1 假设检验问题","startTime":null,"endTime":null},{"Id":221,"Pid":217,"Name":"8.1.2 假设检验中的两类错误","startTime":null,"endTime":null},{"Id":222,"Pid":218,"Name":"8.2.1 单个正态总体参数的假设检验","startTime":null,"endTime":null},{"Id":223,"Pid":218,"Name":"8.2.2 两个正态总体参数的假设检验","startTime":null,"endTime":null},{"Id":224,"Pid":222,"Name":"8.2.1.1 均值检验","startTime":null,"endTime":null},{"Id":225,"Pid":222,"Name":"8.2.1.2 方差检验","startTime":null,"endTime":null},{"Id":226,"Pid":223,"Name":"8.2.2.1 均值差检验","startTime":null,"endTime":null},{"Id":227,"Pid":223,"Name":"8.2.2.2 方差比检验","startTime":null,"endTime":null},{"Id":228,"Pid":216,"Name":"8.3 一般总体参数的假设检验","startTime":null,"endTime":null},{"Id":229,"Pid":216,"Name":"8.4 总体分布的假设检验","startTime":null,"endTime":null}]';
}