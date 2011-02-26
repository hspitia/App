#!E:\programming\msys\1.0\bin\bash

# Script para buscar y reemplazar cadenas de texto al 
# interior de un archivo

FILE=$1

FINDSTRINGS[0]=Institucions
FINDSTRINGS[1]=Usuarioes
FINDSTRINGS[2]=Cursoes
FINDSTRINGS[3]=CursoProgramadoes
FINDSTRINGS[4]=Programacions

REPLACESTRINGS[0]=Instituciones
REPLACESTRINGS[1]=Usuarios
REPLACESTRINGS[2]=Cursos
REPLACESTRINGS[3]=CursosProgramados
REPLACESTRINGS[4]=Programaciones

for index in 0 1 2 3 4
do
  echo Antes: ${FINDSTRINGS[index]}  Despues: ${REPLACESTRINGS[index]}
	sed -i 's/'${FINDSTRINGS[index]}'/'${REPLACESTRINGS[index]}'/g' $FILE
done