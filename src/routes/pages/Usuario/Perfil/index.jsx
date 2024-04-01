import React, { useState } from 'react';
import { ScrollView, StatusBar, Text, View, ImageBackground, Image, Pressable } from 'react-native';
import NavBar from '../../../../Components/NavBar/navbar';
import styles from '../../../../Components/Styles/Perfil/perfilStyle';
import ModalConfigPerfil from '../../../../Components/PerfilConfig/modalConfigPerfil';

export default function Perfil({ navigation }) {
  const [modalConfigVisu, setModalConfigVisu] = useState(false);

  function configPerfilModal() {
    if(modalConfigVisu == false)
    {
      setModalConfigVisu(true);
    }
    else{
      setModalConfigVisu(false);
    }
  }

  return (
    <View style={styles.container}>
      <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end', marginTop: 200 }}>
              <Image
                style={{ height: 100, width: 66 }}
                source={require('../../../../../assets/img/User/superiorDIreito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '94%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 180, width: 40, marginBottom: 200 }}
                source={require('../../../../../assets/img/User/inferiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 140, width: 75, marginBottom: 80}}
                source={require('../../../../../assets/img/User/inferiorDireito.png')}
              />
            </View>
          </View>
      </View>
      <ScrollView>
        <StatusBar style="auto" />
        {/* Botão do menu hamburguer */}
        <Pressable style={styles.menuButton} onPress={configPerfilModal}>
          <Image
            style={{ width: 30, height: 30 }}
            source={require('../../../../../assets/img/User/menu.png')}
          />
        </Pressable>
        <View style={styles.capaPerfilBox}>
          <ImageBackground source={require('../../../../../assets/img/User/capa.png')} resizeMode="cover" style={styles.imageBanner}>
            <View style={styles.imagePerfil}>
              <Image
                style={{ height: 125, width: 125, marginLeft: 5 }}
                source={require('../../../../../assets/img/User/profile-user.png')}
              />
            </View>
          </ImageBackground>
        </View>
        <View style={styles.descOrganizacao}>
          <View style={{alignItems: 'flex-start', justifyContent: 'flex-start',}}>
              <Text style={{ fontSize: 30, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', paddingLeft: 5}}>
                  Usuário
              </Text>
          </View>
        </View>

        {/* Renderizar o ModalConfigPerfil apenas quando modalConfigVisu for verdadeiro */}
        {modalConfigVisu && <ModalConfigPerfil closeModal={() => setModalConfigVisu(false)} />}
      
      </ScrollView>
      <NavBar />
    </View>
  );
}
