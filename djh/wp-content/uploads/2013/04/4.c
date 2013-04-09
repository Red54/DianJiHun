#include <stdio.h>
int main()
{
	int i,j,l;
	for(i=999;i>900;i--)
		for(j=999;j>=i;j--)
		{
			l=i*j;
			if(l%10==9)
				if(l/100000==9)
					if((l/10000)%10==(l/10)%10)
						if((l/100)%10==(l/1000)%10)
							printf("%dX%d=%d\n",i,j,l);
		}
	return 0;
}
