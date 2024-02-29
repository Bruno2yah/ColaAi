import { Text, View, Image, ScrollView, TouchableOpacity } from 'react-native';

import styles from '../../../../Components/Styles/PerfilOrganizacao/perfilOrgStyle';

import NavBar from '../../../../Components/NavBar/navbar';

export default function Teatros({ navigation }) {

  return (
    <View style={styles.container}>
      <ScrollView>
        <View style={styles.imageBanner}>
            <View style={styles.imagePerfil}>
                <Image
                  style={{ height: 75, width: 75, marginLeft: 1, marginBottom: 1 }}
                  source={require('../../../../../assets/img/Perfil Organização/perfil.png')}
                />
            </View>
        </View>

        <View style={{width: '90%', alignSelf: 'center', borderRadius: 20, alignItems: 'center', justifyContent: 'flex-end',flexDirection:'row',}}>
            <TouchableOpacity style={styles.btnSeguir}>
              <Text style={styles.buttonText}>Seguir</Text>
            </TouchableOpacity>
        </View>

        <View style={styles.descOrganizacao}>
            <View style={{alignItems: 'flex-start', justifyContent: 'flex-start',}}>
                <Text style={{ fontSize: 30, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                    Organização
                </Text>
                <Text style={{ fontSize: 12, color: '#A6A6A6',textAlign: 'left', }}>
                    Uma breve descrição sobre a empresa.
                </Text>
            </View>
        </View>

        <View style={styles.fundo}>
          <View style={{alignItems: 'flex-start', justifyContent: 'flex-start', width: '100%', position: 'absolute',}}>
            <Image
              style={{ height: 130, width: 80}}
              source={require('../../../../../assets/img/Perfil Organização/detailEsquerda.png')}
            />
          </View>
            <Image
              style={{ height: 32, width: 210, alignSelf: 'center', marginBottom: 20  }}
              source={require('../../../../../assets/img/Perfil Organização/publicacoesTxt.png')}
            />
            <View style={{alignItems: 'flex-end', justifyContent: 'flex-end', width: '100%', position: 'absolute', paddingBottom: 50}}>
            <Image
              style={{ height: 130, width: 80}}
              source={require('../../../../../assets/img/Perfil Organização/detailDireita.png')}
            />
            </View>
          </View>

        <View style={styles.cards}>
          <Text style={{ fontSize: 18, fontWeight: 'bold', color: '#A6A6A6', paddingLeft: '10%',textAlign: 'left', alignSelf: 'flex-start', position: 'absolute',}}>
              Últimos 30 dias
          </Text>
          <View style={styles.FotosArea}>
            <View style={styles.TeatrosLocal}>
              <Text
                  style={{
                  fontSize: 16,
                  textAlign: 'left',
                  color: '#A6A6A6',
                  marginBottom: 10,
                  }}
              >
                Área de posts sobre eventos que ocorrem ou estão ocorrendo
              </Text>
              <Image
                style={styles.FotoMaior}
                source={require('../../../../../assets/img/Perfil Organização/publi1.png')}
              />
              <View style = {{flexDirection:'row', width: '100%', alignItems: 'center', justifyContent: 'center', marginTop: 5}}>
                <Image
                  style={styles.FotoMenor}
                  source={require('../../../../../assets/img/Perfil Organização/publi3.png')}
                />
                <Image
                  style={styles.FotoMenor}
                  source={require('../../../../../assets/img/Perfil Organização/publi2.png')}
                />
              </View>
            </View>
          </View>
        </View>
        
      </ScrollView>
      <NavBar />
    </View>
  );
}
