$("#ex").hide();
$("#ex").fadeIn(5000);

$("#ex").on("click", function(){
$("#ex").append("<p>図書館へお越しいただきありがとうございます。</P>");
$("#ex").append("<p>この図書館ではジャンルを問わず、様々な本の登録を受け付けております。</P>");
$("#ex").append("<p>登録して頂きました本は皆様に借りて頂けるようWeb上に公開させて頂きますので、宜しくお願いします。</P>");
$("#ex").append("<p>↓の「書籍を登録してください」より本の登録をお願いします。</P>");
$("#ex").append("<p>たくさんの本の登録をお待ちしておりますm(_ _)m</P>");
$("#ex").css("color","yellow");
$("#ex").css("font-size","15px");

});