import React from 'react';
import { ScrollView, StatusBar, StyleSheet, Text, View, ImageBackground,Image } from 'react-native';
import { useNavigation } from '@react-navigation/native';

export default function PerfilUser() {
  const navigation = useNavigation();

  return (
    <ScrollView style={styles.container}>
      <StatusBar style="auto" />

      <View style={styles.capaPerfilBox}>
        <ImageBackground source={require('../../../../../assets/img/User/capa.jpg')} resizeMode="cover" style={styles.imageCapa}>
        
        </ImageBackground>
      </View>
        <View style={styles.perfilUser}>
          <Image
          style={styles.fotoUser}
          source={require('../../../../../assets/img/User/user.png')}
          />
      </View>
      <View style={styles.nomePerfil}>
        <Text style={styles.textUser}>Usuário</Text>
      </View>
      <View style={styles.botaoPerfil}></View>

    
      
     
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
  
  },
  capaPerfilBox:{
    flex:1,
    backgroundColor:'red',
  
  },
  imageCapa: {
    justifyContent: 'center',
    height:170,
  },
  fotoUser: {
    width: 130,
    height: 130,
    marginStart:10,
    borderRadius:100,

  },
  perfilUser:{
    flex:1,
    width:'100%',
    justifyContent:'flex-start',
    alignItems:'flex-start'

  },
  nomePerfil:{
    justifyContent:'center',
    alignItems:'flex-start',
    marginStart:50,
  },
  textUser:{
    
    
  }
});
