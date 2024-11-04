# Barcha so‘zlarni bitta ustunga keltiramiz, keyin ularni sortlaymiz
# uniq -c har bir so‘zning necha marta takrorlanganligini hisoblaydi
# sort -rnk1 esa natijani kamayish tartibida saralaydi
tr -s ' ' '\n' < words.txt | sort | uniq -c | sort -rnk1 | awk '{print $2, $1}'
