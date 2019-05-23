  #include<stdio.h>
  void main()
       {
        String str[50];
              int i,count=0;
              scanf("%s",&str);

              for(i=0;str[i];i++)
                     if(str[i] == ' ')
                           count++;
              
              printf("\n %d",count);
   }
