$(function(){
    //分割したい個数を入力
    var division = 10;
    //要素の数を数える
    var divlength = $('.indexbox .box').length;
    //分割数で割る
    dlsizePerResult = divlength / division;
    //分割数 刻みで後ろにmorelinkを追加する
    for(i=1;i<=dlsizePerResult;i++){
        $('.indexbox .box').eq(division*i-1)
            .after('<span class="morelink link'+i+'">もっと見る</span>');
    }
    //最初のli（分割数）と、morelinkを残して他を非表示
    $('.indexbox .box,.morelink').hide();
    for(j=0;j<division;j++){
        $('.indexbox .box').eq(j).show();
    }
    $('.morelink.link1').show();
    //morelinkにクリック時の動作
    $('.morelink').click(function(){
        //何個目のmorelinkがクリックされたかをカウント
        index = $(this).index('.morelink');
        //(クリックされたindex +2) * 分割数 = 表示数
        for(k=0;k<(index+2)*division;k++){
            $('.indexbox .box').eq(k).fadeIn();
        }
        //一旦全てのmorelink削除
        $('.morelink').hide();
        //次のmorelink(index+1)を表示
        $('.morelink').eq(index+1).show();
    });
    
    //分割したい個数を入力
    var division = 10;
    //要素の数を数える
    var divlength = $('.comment_area .box').length;
    //分割数で割る
    dlsizePerResult = divlength / division;
    //分割数 刻みで後ろにmorelinkを追加する
    for(i=1;i<=dlsizePerResult;i++){
        $('.comment_area .box').eq(division*i-1)
            .after('<span class="morelink link'+i+'">もっと見る</span>');
    }
    //最初のli（分割数）と、morelinkを残して他を非表示
    $('.comment_area .box,.morelink').hide();
    for(j=0;j<division;j++){
        $('.comment_area .box').eq(j).show();
    }
    $('.morelink.link1').show();
    //morelinkにクリック時の動作
    $('.morelink').click(function(){
        //何個目のmorelinkがクリックされたかをカウント
        index = $(this).index('.morelink');
        //(クリックされたindex +2) * 分割数 = 表示数
        for(k=0;k<(index+2)*division;k++){
            $('.comment_area .box').eq(k).fadeIn();
        }
        //一旦全てのmorelink削除
        $('.morelink').hide();
        //次のmorelink(index+1)を表示
        $('.morelink').eq(index+1).show();
    });
});